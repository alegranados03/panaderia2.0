<?php

namespace App\Http\Controllers;

use App\Pago;
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
        //
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
}
