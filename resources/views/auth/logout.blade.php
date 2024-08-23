@extends('layout.principal')

@section('conteudo')
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

<ul class="navbar-nav ml-auto">
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="/auth/login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/auth/register">Register</a></li>
                @else
                    <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             {{ Auth::user()->name }}
                       </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/home">Logout</a>
                        </div>
                    </li>
               @endif
</ul>
@stop