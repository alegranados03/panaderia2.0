<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Categoria;
use App\Pago;
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
        return view('administracion.orden.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $orden=Orden::findOrFail($id);
        $detallesOrden=Orden::join('detalles_orden','ordenes.id','=','detalles_orden.orden_id')
        ->join('productos','productos.id','=','detalles_orden.producto_id')
        ->where('ordenes.id','=',$orden->id)
        ->select('ordenes.codigo_seguimiento','productos.nombre_producto','productos.precio','detalles_orden.cantidad_producto','detalles_orden.total_parcial')
        ->get();
      
        $codigo=$orden->codigo_seguimiento;
        $total = Pago::select('total_cancelar')->where('orden_id','=',$orden->id)->value('total_cancelar');
        $fechaCreacion=$orden->created_at;
        $categorias=Categoria::all();
        return view('cliente.detalleOrden',compact('detallesOrden','categorias','codigo','total','fechaCreacion'));
    }

    /*'*'
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orden $orden)
    {
        //
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
}
