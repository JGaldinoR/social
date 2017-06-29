@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado Programas</div>

                <div class="panel-body">
                        @if(count($programas) > 0)
                        <table class = "table border">
                            <thead>

                                 <th>ID</th>
                                 <th>Nombre</th>
                                 <th>Horario</th>                          

                            </thead>
                            <body>
                            @foreach($programas as $programa)
                            <tr>

                                <td>{{ $programa->id }} </td>
                                <td>{{ $programa->nombre }}</td>
                                <td>{{ $programa->horario }}</td>
                                        
                            </tr>
                            <tr>
                                     
                                    <td colspan="3">
                                    @foreach($programa->users as $user)
                                        <li>{{ $user->nombre }} ----------- {{ $user->rol }}</li>
                                    @endforeach
                                    </td>

                            </tr>
                            @endforeach
                            </body>
                         </table>
                        @else
                            <span>No hay programas registradas</span>
                        @endif

                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection