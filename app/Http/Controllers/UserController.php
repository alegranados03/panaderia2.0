<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Caffeinated\Shinobi\Models\Role;
use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  private $path = 'usuarios/';

  //Referencia al middleware
  public function __construct(){
    //$this->middleware('auth');
  }
  public function index(Request $request)
  {
      $users=User::all();
      return view('usuarios.listaUsuarios',["users"=>$users]);
    }

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('usuarios.registroUsuario');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */



  public function store(UserRequest $request)
  {
    try{
      $user = new User($request->all());
      $user->password=bcrypt(substr(microtime(),1,6));
      //se modificará para hacer una contraseña aleatoria y mandar un correo con datos
      $rol=Role::select('id')->where('name','Recepcionista')->value('id');
      $user->save();
      $user->assignRole($rol);
     return redirect()->action('UserController@index')->with('msj','Usuario Registrado');
    }catch(Exception $e){
      return back()->with('msj2','Usuario no registrado, es posible que el username ya se encuentre registrado');
    }
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $user=User::findOrFail($id);
    return view($this->path.'perfilUsuario',compact('user'));
  }


  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  { $roles=Role::all();
    $user=User::findOrFail($id);
    return view ($this->path.'editarUsuario',compact('user','roles'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
      $this->validate($request,[
        'primerNombre' => 'required|string|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        'segundoNombre' => 'required|string|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        'primerApellido' => 'required|string|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        'segundoApellido' => 'required|string|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        'direccion'=>'string|max:100',

      ]);
      try{
        $user=User::findOrFail($id);
        $user->primerNombre=$request->primerNombre;
        $user->segundoNombre=$request->segundoNombre;
        $user->primerApellido=$request->primerApellido;
        $user->segundoApellido=$request->segundoApellido;
        $user->save();
        $user->roles()->sync($request->get('roles'));
      return redirect()->action('UserController@show',['id' =>$user->id])->with('msj','#');
      }catch(Exception $e){
        return back()->with('msj2','Usuario no editado,revise los datos proporcionados');
      }


  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
  }


  public function editPassword($id)
  {
    try{
      $user = User::findOrFail($id);
      return view($this->path.'editarPassword',compact('user'));
    }catch(Exception $e){
      return "Error al intentar modificar al Usuario".$e->getMessage();
    }

  }


  public function actualizarPassword(Request $request, $id){

    $this->validate($request,[
      'old_password' => 'required|string|min:6',
      'password' => 'confirmed|required|string|min:6',

    ]);
    $user=User::findOrFail($id);
    $almacenada=$user->password;
    $recibida=$request->old_password;

    if (Hash::check($recibida, $almacenada)) {
      $nueva_password=$request->password;
      $user->password=bcrypt($nueva_password);
      $user->save();
      return redirect()->action('UserController@show',['id' =>$user->id])->with('msj','#');
    }else{
      //  return redirect()->action('UserController@show',['id' => $user->id])->with('msj2','La contraseña anterior está incorrecta, intentelo nuevamente');
    }
  }


}
