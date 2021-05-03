@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
         <h4 class="text-center">DESTINOS</h4>
            <a href="{{route('destino.create')}}" class="btn btn-warning">NUEVO DESTINO</a>
            <table class="table table-striped">
                <thead>
                    <th>Id</th>                 
                    <th>Nombre</th>                
                    <th>Acción</th>
                </thead>
                <tbody>
                    @forelse ($destino as $item)
                    
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>
                            <a href="{{ route('destino.edit',$item->id)}}" class="btn btn-primary">EDITAR</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['producto.destroy',$item->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('ELIMINAR',['class'=>'btn btn-danger','onclick'=>'return confirm("ESTA SEGURO DE ELIMINAR")']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
