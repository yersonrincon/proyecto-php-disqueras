@extends ('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="text-center">
        <h2>registro genero</h2>
    </div>
    <div class="card" style="width: 30rem;margin:20px auto;">
        <div class="card-body">
            <form action="{{url('/genero')}}" method="POST">
                @include('genero.form');
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection