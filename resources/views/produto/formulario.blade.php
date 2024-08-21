@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>

<form action="/produto/adiciona" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <div class="form-group mt-3">
    <label>Nome</label>
    <input name="nome" class="form-control"/>
    </div>
    <div class="form-group mt-3">
    <label>Descrição</label>
    <input name="descricao" class="form-control"/>
    </div>
    <div class="form-group mt-3">
    <label>Valor</label>
    <input name="valor" class="form-control"/>
    </div>
    <div class="form-group mt-3">
    <label>Quantidade</label>
    <input type="Number" name="quantidade" class="form-control"/>
    </div>
    
    <button type="submit" class="btn btn-primary w-100 mt-3">Adicionar</button>
    
</form>

@stop