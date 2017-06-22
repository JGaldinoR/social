@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Carreras</div>

                <div class="panel-body">
                    @if(count($carreras) > 0)
                        <table class = "table border">
                            <thead>
                                 <th>ID</th>
                                 <th>Carrera</th>
                            </thead>
                            <body>
                            @foreach($carreras as $carrera)
                                <tr>

                                    <td>{{ $carrera->id}} </td>
                                    <td>{{ $carrera->carrera}} </td>
                                 </tr>
                             @endforeach
                            </body>
                         </table>
                    @else
                         <span>No hay carreras registradas</span>
                    @endif

                    <a href="{{ route('carrera.create') }}" class = "btn btn-success">Nueva Carrera</a>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
