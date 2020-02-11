@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif


<a href="{{ url('usuarios/create') }}" class="btn btn-outline-success">Agregar usuario</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Empresa</th>
            <th>Cargo</th>
            <th>Area_Visita</th>
            <th>Anfitrion</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
     @foreach($Usuario as $Usuarios)   
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$Usuarios->Cedula}}</td>
            <td>{{$Usuarios->Nombres}} {{$Usuarios->Apellidos}}</td>
            <td>{{$Usuarios->Empresa}}</td>
            <td>{{$Usuarios->Cargo}}</td>
            <td>{{$Usuarios->Area_Visita}}</td>
            <td>{{$Usuarios->Anfitrion}}</td>
            <td>
                

              <a class="bnt btn-warning"  href="{{url('/usuarios/'.$Usuarios->id.'/edit')}}">Editar
              </a>
             
            
            <form method="post" action="{{ url('/usuarios/'.$Usuarios->id) }}" style="display:inline">
            {{csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');" >Borrar</button>
                 
             </form>

            </td>
        </tr>
    @endforeach    
    </tbody>
</table>
</div>
@endsection