@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>

@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
     <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif

<form action="/produto/adiciona" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <div class="form-group mt-3">
    <label>Nome</label>
    <input name="nome" class="form-control" value="{{ old('nome') }}"/>
    </div>
    <div class="form-group mt-3">
    <label>Descrição</label>
    <input name="descricao" class="form-control" value="{{ old('descricao') }}"/>
    </div>
    <div class="form-group mt-3">
    <label>Valor</label>
    <input name="valor" class="form-control" value="{{ old('valor') }}"/>
    </div>
    <div class="form-group mt-3">
    <label>Quantidade</label>
    <input type="Number" name="quantidade" class="form-control" value="{{ old('quantidade') }}"/>
    </div>
    
    <button type="submit" class="btn btn-success w-100 mt-3">Adicionar</button>
    
</form>

@stop