@extends('layout.principal')

@section('conteudo')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-heading">Home</div>
                    <div class="card-body">
                     Bem Vindo, {{ Auth::user()->name }}!
                    </div>
            </div>
        </div>
    </div>
</div>
<form method="POST" action={{ route('logout') }}>
    @csrf
    <button type="submit">Logout</button>
</form>
@endauth

@guest
    <h1>Bem vindo, Visitante!</h1>
@endguest
@endsection