<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Carrito;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductoRequest;
use App\Http\Requests\ProductoERequest;
use Image;
use DB;
use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $path = 'administracion/productos/';

    //Referencia al middleware
    public function __construct(){
      //$this->middleware('auth');
    }


    public function index(Request $request){
        $productos=Producto::all();
        return view($this->path.'index',["productos"=>$productos]);
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {

      $direccion=Storage::disk('public')->put('imagenes',$request->file('imagen'));

        try{
          $producto=new Producto($request->all());
          $producto->stock=0;
          $producto->fill(['imagen'=>asset($direccion)])->save();

          return redirect()->action('ProductoController@index',['producto' =>$producto->id])->with('msj','Producto agregado con éxito');
        }catch(Exception $e)
          {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
      return view($this->path.'show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
    return view($this->path.'edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoERequest $request, Producto $producto)
    {
      try{
      $producto->nombre_producto=$request->nombre_producto;
      $producto->tipoProducto=$request->tipoProducto;
      $producto->precio=$request->precio;
      $producto->descripcion=$request->descripcion;
      if($request->file('imagen')){
      $direccion=Storage::disk('public')->put('imagenes',$request->file('imagen'));
      $producto->fill(['imagen'=>asset($direccion)])->save();}else{
        $producto->update();
    }
        return redirect()->action('ProductoController@show',['producto' =>$producto->id])->with('msj','Producto editado con éxito');
      }catch(Exception $e)
        {

      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $producto=Producto::find($id);
           $producto->delete();
           return Redirect::to('productos');
    }



    public function mostrarProductos()
    {
      $productos=Producto::orderBy('tipoProducto','desc')->get();
        return view('compras.adproductos',compact('productos'));
    }


    public function verCarrito()
    {
      if(!Session::has('carrito')){
          return view('compras.verCarrito',['productos'=>null]);
      }
      $carritoAnt=Session::get('carrito');
      $carrito=new Carrito($carritoAnt);
      return view('compras.verCarrito',['productos'=>$carrito->elementos,'precioTotal'=>$carrito->precioTotal]);

    }
    public function agregarACarrito(Request $request, $id,$redir)
    {
      $producto=Producto::find($id);
      $carritoAnt=Session::has('carrito') ? Session::get('carrito') : null;
      $carrito= new Carrito($carritoAnt);
      $carrito->agregar($producto,$producto->id);
      $request->session()->put('carrito',$carrito);
      if($redir==1){
          return redirect()->action('ProductoController@mostrarProductos')->with('msj',$producto->nombre_producto.' Agregado al Carrito Exitosamente');
      }else{
          return redirect()->action('ProductoController@verCarrito')->with('msj',$producto->nombre_producto.' Agregado al Carrito Exitosamente');
      }
    }


    public function disminuirUno(Request $request, $id)
    {
      $producto=Producto::find($id);
      $carritoAnt=Session::has('carrito') ? Session::get('carrito') : null;
      $carrito= new Carrito($carritoAnt);
      $carrito->disminuir($producto,$producto->id);
      $request->session()->put('carrito',$carrito);
        return redirect()->action('ProductoController@verCarrito')->with('msj',$producto->nombre_producto.'Editado Exitosamente');
    }

    public function quitarProducto(Request $request, $id)
    {
      $producto=Producto::find($id);
      $carritoAnt=Session::has('carrito') ? Session::get('carrito') : null;
      $carrito= new Carrito($carritoAnt);
      $carrito->eliminar($producto->id);
      $request->session()->put('carrito',$carrito);
        return redirect()->action('ProductoController@verCarrito')->with('msj',$producto->nombre_producto.'Editado Exitosamente');
    }

    public function productoDetalle(){

      return view('cliente.detalleProducto');
    }
}
