<?php

namespace App\Http\Controllers;

use App\Pago;
use App\Producto;
use App\Categoria;
use App\Orden;
use App\DetalleOrden;
use Illuminate\Http\Request;
use Session;
use App\Carrito;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('pago.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
          //se llama al carrito
          $carritoAnt=Session::has('carrito') ? Session::get('carrito') : null;
          $carrito=new Carrito($carritoAnt);
              //se crea la orden y se asocian los datos y se crea en la base
              $orden=new Orden();
              $orden->codigo_seguimiento=substr(microtime(),11,strlen(microtime())-11);
              $orden->estado_servicio="PENDIENTE";
              $orden->estado_pago="SIN CANCELAR";
              $orden->tipo_orden="EN LINEA";
              $orden->user_id=auth()->user()->id;
              if($orden->save()){
                //se registran los detalles de la orden y se guardan en la base
                foreach($carrito->elementos as $producto){

                $prodx=Producto::findOrFail($producto['elemento']->id);

                if($producto['cantidad']>$prodx->stock){
                  $carrito->eliminar($producto['elemento']->id);
                  $request->session()->put('carrito',$carrito);
                  $orden->delete();

                  return redirect()->action('ProductoController@verCarrito')->with('error');
                }else{
                  $prodx->stock=$prodx->stock - $producto['cantidad'];
                  $prodx->update();
                }

                $detalle=new DetalleOrden();
                $detalle->orden_id=$orden->id;
                $detalle->producto_id=$producto['elemento']->id;
                $detalle->cantidad_producto=$producto['cantidad'];
                $detalle->total_parcial=$producto['precio'];
                $detalle->save();
                }

                //se registra el pago y se cambia el estado de pago de la orden
                $pago=new Pago();
                $pago->orden_id=$orden->id;
                $pago->tipo_pago="Tarjeta Crédito";
                $pago->tarjeta_credito=auth()->user()->tarjeta_credito;
                $pago->total_cancelar=$carrito->precioTotal;
                $pago->recibido=$carrito->precioTotal;
                $pago->cambio="0.0";
                if($pago->save()){
                  $orden->estado_pago="CANCELADA";
                  $orden->save();
                }
              }
                //se elimina el carrito
                $carrito=null;
                $request->session()->put('carrito',$carrito);
          return redirect()->action('TiendaController@index');

        } catch (Exception $e) {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        //
    }

    public function vistaPago($id){
        $orden = $id;
        $detallesOrden = DetalleOrden::where('orden_id','=',$id)->get();
        $total=0;
        foreach ($detallesOrden as $key => $value) {
                $total+= $value->total_parcial;
        }
        return view('administracion.orden.pagoOrden',compact('orden','total'));
    }



    public function pagoLocal(Request $request, $id){

      try {
        $orden=Orden::findOrFail($id);
        $pago=new Pago();
        $pago->orden_id=$id;

        if($orden->estado_pago!="CANCELADA"){   //revisa que la orden no haya sido cancelada con anterioridad

          if($request->recibido2!=null && $request->cambio!=null){ //valida que se haya ingresado cantidad de dinero (efectivo)
            if($request->recibido2>=$request->total_cancelar){
                $pago->tipo_pago="Efectivo";
                $pago->total_cancelar=$request->total_cancelar;
                $pago->recibido=$request->recibido2;
                $pago->cambio=$request->cambio;

            }else{
              return redirect()->back()->with('');
            }
          }else if($request->tarjeta_credito2!=null && strlen($request->tarjeta_credito2)==19){ //verifica tamaño de tarjeta de credito
                $pago->tipo_pago="Tarjeta Crédito";
                $pago->total_cancelar=$request->total_cancelar;
                $pago->recibido=$request->total_cancelar;
                $pago->tarjeta_credito=$request->tarjeta_credito2;
                $pago->cambio="0.0";
              }else{
                return redirect()->back()->with('');
              }


            if($pago->save()){ //si el pago se guarda, cambia el estado de la orden
              $orden->estado_servicio="ENTREGADA";
              $orden->estado_pago="CANCELADA";
              $orden->save();
              return redirect()->action('OrdenController@index');
            }
          }else{
          return redirect()->back()->with('');
           }



      } catch (Exception $e) {

      }





    }
}
