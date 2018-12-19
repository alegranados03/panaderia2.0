<table width="100%" class="table table-striped table-bordered table-hover table-responsive-md" id="dataTables-example">
    <thead>
    	<tr>
            <th>Usuario</th>
            <th>Nombre Completo</th>
            <th>Rol</th>
            <th>Acciones</th>
         </tr>
    </thead>
    <tbody>
      @foreach($users as $usuario)
    	<tr class="odd gradeX">
            <td>{{$usuario->username}}</td>
            <td>{{$usuario->primerNombre }} {{$usuario->segundoNombre }} {{$usuario->primerApellido }} {{$usuario->segundoApellido }}</td>
            <td>{{$usuario->name}}</td>
            <td class="center">
                <a class="btn btn-info">Ver</a>
                <a class="btn btn-primary">Editar</a>
                <a class="btn btn-danger">Deshabilitar</a>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
