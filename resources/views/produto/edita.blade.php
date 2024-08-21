@extends('layout.principal')

@section('conteudo')

    <h1>Editar produto</h1>

<form action="{{ route('produto.atualiza') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $produto->id }}"/>
    
    <div class="form-group mt-3">
    <label>Nome</label>
    <input name="nome" class="form-control" value="{{$produto->nome}}"/>
    </div>
    <div class="form-group mt-3">
    <label>Descrição</label>
    <input name="descricao" class="form-control" value="{{$produto->descricao}}"/>
    </div>
    <div class="form-group mt-3">
    <label>Valor</label>
    <input name="valor" class="form-control" value="{{$produto->valor}}"/>
    </div>
    <div class="form-group mt-3">
    <label>Quantidade</label>
    <input type="Number" name="quantidade" class="form-control" value="{{$produto->quantidade}}"/>
    </div>

    <button type="submit" class="btn btn-primary w-100 mt-3">Confirmar</button>
</form>

@stop

 
