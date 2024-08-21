@extends('layout.principal')

@section('conteudo')
    @if(empty($produtos))
        <div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>
    @else

            <h1>Listagem de produtos</h1>
            <table class="table table-striped table-bordered table-hover">
                @foreach($produtos as $produto)
                <tr class="{{$produto->quantidade<=1 ? 'alert alert-danger' : ''}}">
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->valor}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <td>
                            <a href="{{ route('produto.detalhes', [$produto->id]) }}">
                                <span class="fas fa-search"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('produto.remove', [$produto->id])}}">
                                <span class="fas fa-trash"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('produto.edita', [$produto->id])}}">
                                <span class="fas fa-edit"></span>
                            </a>
                        </td>
                </tr>
                @endforeach
            </table>
    @endif

    <h4> 
        <span class="badge bg-danger float-end">
            Um ou menos itens no estoque
        </span>
    </h4>

@stop