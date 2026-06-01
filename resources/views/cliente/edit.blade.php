@extends ('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="text-center">
        <h2>editar cliente</h2>
    </div>
    <div class="card" style="width: 30rem;margin:20px auto;">

        <div class="card-body">
            <form action="{{url('/cliente/'.$cliente->id)}}" method="POST">

                @csrf
                {{method_field('PATCH')}}
                @include('cliente.form');
            </form>
            @endsection