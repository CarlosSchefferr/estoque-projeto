@extends('layout.principal')

@section('conteudo')
@auth
    <head>
        <style>
            .listagem-text {
                font-family: 'Glegoo', serif;
               
            }

            .table {
                font-family: 'Glegoo', serif;
               
            }

            .alert-danger {
                font-family: 'Glegoo', serif;
                
            }

            .detalhes-icon {
                color: #337ab7;
               
            }

            .remove-icon {
                color: #d9534f;
                
            }

            .editar-icon {
                color: #5cb85c;
               
            }

            .font-fix {
                font-family: 'Glegoo', serif;
                
            }

        </style>
    </head>
    @if(empty($produtos))
        <div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>
    @else

            <h1 class="mt-2 listagem-text" >Listagem de produtos</h1>
            <table class=" mt-3 table table-striped table-bordered table-hover">
                <thead class="">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Detalhes</th>
                        <th scope="col">Remover</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                @foreach($produtos as $produto)
                
                <tr class="{{$produto->quantidade<=1 ? 'alert alert-danger' : ''}}">
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->valor}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <td>
                            <a class="detalhes-icon" href="{{ route('produto.detalhes', [$produto->id]) }}">
                                <span class="fas fa-search"></span>
                            </a>
                        </td>
                        <td>
                            <a class="remove-icon" href="{{route('produto.remove', [$produto->id])}}">
                                <span class="fas fa-trash"></span>
                            </a>
                        </td>
                        <td>
                            <a class="editar-icon" href="{{route('produto.edita', [$produto->id])}}">
                                <span class="fas fa-edit"></span>
                            </a>
                        </td>
                </tr>
                @endforeach
            </table>
    @endif

    <h4> 
        <span class="font-fix badge bg-danger float-end">
            Um ou menos itens no estoque
        </span>
    </h4>
@endauth

@stop