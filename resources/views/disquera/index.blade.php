@extends ('layouts.app')
@section('content')
<div class="container">
  @if(Session::has('msn'))
  <div class="alert alert-primary" role="alert">
    <strong>
      {{Session::get('msn')}}
    </strong>
  </div>
  @endif
  <h1> listado de disquera</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">identificacion</th>
        <th scope="col">nombre</th>
        <th scope="col">telefono</th>
        <th scope="col">direccion</th>
        <th scope="col">estado</th>
        <th scope="col">editar</th>
        <th scope="col">eliminar</th>
        <a role="button" class="btn btn-warning" href="{{url('/disquera/create/')}}"> agregar</a>
      </tr>
      <td>
    </thead>
    <tbody>
      @foreach ($disqueras as $c)
      <tr>
        <th scope="row">{{ $c->id}}</th>
        <td>{{ $c->identificacion}}</td>
        <td>{{ $c->nombreDisquera}}</td>
        <td>{{ $c->telefonoDisquera}}</td>
        <td>{{$c->direccion}}</td>
        <td>{{ $c->estadoDisquera}}</td>
        <td> <a class="btn btn-warning" href="{{url('/disquera/'.$c->id.'/edit')}}"
            role="button"> editar</a></td>
        <td>
          <form action="{{url('/disquera/'.$c->id)}}" method="POST">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" class="btn btn-danger" value="eliminar" onclick="return confirm('esta seguro de eliminar este registro ')">
          </form>
          @endforeach
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection