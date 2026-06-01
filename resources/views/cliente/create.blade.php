@extends ('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="text-center">
        <h2>registro cliente</h2>
    </div>
    <div class="card" style="width: 30rem;margin:20px auto;">

        <div class="card-body">
            <form action="{{url('/cliente')}}" method="POST">
                @include('cliente.form');
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection