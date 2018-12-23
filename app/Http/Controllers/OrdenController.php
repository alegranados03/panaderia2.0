<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Categoria;
use App\Pago;
use App\Mesa;
use App\Producto;
use App\DetalleOrden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Orden::join('mesas','ordenes.mesa_id','=','mesas.id')
        ->where('ordenes.tipo_orden','=','LOCAL')
        ->where('ordenes.estado_servicio','=','PENDIENTE')
        ->select('ordenes.*','mesas.codigo_mesa')->get();
        return view('administracion.orden.index',compact('ordenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mesas = Mesa::pluck('codigo_mesa','id')->toArray();
        return view('administracion.orden.create',compact('mesas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orden = new Orden();
        $orden->codigo_seguimiento = substr(microtime(),11,strlen(microtime())-11);
        $orden->estado_servicio = $request->estado_servicio;
        $orden->estado_servicio="PENDIENTE";
        $orden->estado_pago="SIN CANCELAR";
        $orden->tipo_orden="LOCAL";
        $orden->mesa_id = $request->mesa_id;
        $orden->user_id=auth()->user()->id;
        $orden->save();
        return redirect()->action('OrdenController@agregarDetalle',['id' =>$orden->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->user()->isCliente()){
       //Lado del Cliente 
       $orden=Orden::findOrFail($id);
        $detallesOrden=Orden::join('detalles_orden','ordenes.id','=','detalles_orden.orden_id')
        ->join('productos','productos.id','=','detalles_orden.producto_id')
        ->where('ordenes.id','=',$orden->id)
        ->select('ordenes.codigo_seguimiento','productos.nombre_producto','productos.precio','detalles_orden.cantidad_producto','detalles_orden.total_parcial')
        ->get();

        $codigo=$orden->codigo_seguimiento;
        $total = Pago::select('total_cancelar')->where('orden_id','=',$orden->id)->value('total_cancelar');
        $fechaCreacion=$orden->created_at;
        $categorias=Categoria::all();
        return view('cliente.detalleOrden',compact('detallesOrden','codigo','total','fechaCreacion','categorias'));
        }else{
            $orden=Orden::findOrFail($id);
            $detallesOrden=Orden::join('detalles_orden','ordenes.id','=','detalles_orden.orden_id')
            ->join('productos','productos.id','=','detalles_orden.producto_id')
            ->where('ordenes.id','=',$orden->id)
            ->select('ordenes.codigo_seguimiento','productos.nombre_producto','productos.precio','detalles_orden.cantidad_producto','detalles_orden.total_parcial')
            ->get();

            $codigo=$orden->codigo_seguimiento;
            $total=0;
            foreach ($detallesOrden as $key => $value) {
                $total+= $value->total_parcial;
            }
            $fechaCreacion=$orden->created_at;
            return view('administracion.orden.show',compact('detallesOrden','codigo','total','fechaCreacion')); 
        }
    }

    /*'*'
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orden = Orden::findOrFail($id);
        $mesa_id = $orden->mesa_id;
        $mesas = Mesa::pluck('codigo_mesa','id')->toArray();
        return view('administracion.orden.edit', compact('mesas','orden','mesa_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $orden = Orden::findOrFail($id);
            $orden->mesa_id = $request->mesa_id;
            $orden->update();
            return redirect()->action('OrdenController@index');
        } catch (Exception $e) {
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        //
    }


    public function historialLocal()
    {
      $ordenes = Orden::join('mesas','ordenes.mesa_id','=','mesas.id')
      ->where('ordenes.tipo_orden','=','LOCAL')
      ->where('ordenes.estado_servicio','=','ENTREGADA')
      ->select('ordenes.*','mesas.codigo_mesa')->get();
        return view('administracion.orden.historialLocal',compact('ordenes'));
    }

    public function historialLinea()
    {
        $ordenes = Orden::where('tipo_orden','=','EN LINEA')
        ->where('estado_servicio','=','ENTREGADA')->get();
        return view('administracion.orden.historialOLinea',compact('ordenes'));
    }

    public function pendienteLinea()
    {
        $ordenes = Orden::where('ordenes.tipo_orden','=','EN LINEA')
        ->where('ordenes.estado_servicio','=','PENDIENTE')->get();
        return view('administracion.orden.pendienteLinea',compact('ordenes'));
    }

    public function agregarDetalle($id){
        $orden =$id;
        $productos = Producto::all();
        return view('administracion.orden.agregarDetalles',compact('productos','orden'));
    }

    public function agregarDetalleStore(Request $request){
        if(!is_null($request->productos)){
            try {
                $productosObj = Producto::all();
                foreach ($productosObj as $key => $value) {
                    for ($i=0; $i < sizeof($request->productos) ; $i++) { 
                        if($value->id == $request->productos[$i]){
                            $detallesObj = DetalleOrden::select('*')
                            ->where('orden_id', '=', $request->idOrden)
                            ->where('producto_id','=', $request->productos[$i])->get();
                            if(sizeof($detallesObj) !=0){
                                foreach ($detallesObj as $key => $detalleFor) {
                                    $idDetalle = $detalleFor->id;
                                }
                                $detallesObj = DetalleOrden::findOrFail($idDetalle);
                                $detallesObj->cantidad_producto+=$request[$request->productos[$i]];
                                $detallesObj->total_parcial += $request[$request->productos[$i]]*$value->precio;
                                $detallesObj->update();
                            }else{
                                $detalle=new DetalleOrden();
                                $detalle->orden_id=$request->idOrden;
                                $detalle->producto_id=$request->productos[$i];
                                $detalle->cantidad_producto=$request[$request->productos[$i]];
                                $detalle->total_parcial = $request[$request->productos[$i]]*$value->precio;
                                if(!is_null($request[$request->productos[$i]])){
                                    $detalle->save();
                                }else{
                                    return redirect()->back();
                                }
                            }   
                        }
                    }
                }
                return redirect()->action('OrdenController@index');
            } catch (Exception $e) {
                
            }
        }else{
            return redirect()->back();
        }
    }

}
