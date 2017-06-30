@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de users</div>

                <div class="panel-body">
                    @if(count($users) > 0)
                        <table class = "table border">
                            <thead>

                                 <th>ID</th>
                                 <th>Codigo</th>
                                 <th>Nombre</th>
                                 <th>No Programas</th>
                                 <th>Carrera</th>
                                 <th>Rol</th>
                                 <th>Acceso Nombre-Correo</th>

                            </thead>
                            <body>
                            @foreach($users as $user)
                                <tr>

                                    <td>{{ $user->id}} </td>
                                    
                                        <td>{{ $user->codigo}}</td> 
                                        <td>
                                            <a href="{{route('usuario.show',$user->id)}}">
                                        
                                        {{$user->nombre}}</a></td>
                                        <td>{{ $user->numero_programas }}</td>
                                        <td>{{ $user->carrera->carrera }}</td>
                                        <td>{{ $user->rol}}</td>
                                        <td>{{ $user->usuario_correo }}</td>
                                    
                                 </tr>
                             @endforeach
                            </body>
                         </table>
                    @else
                         <span>No hay users registradas</span>
                    @endif

                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
