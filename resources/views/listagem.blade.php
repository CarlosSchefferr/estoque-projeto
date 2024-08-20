<html>
    <head>
        <title>Controle de estoque</title>
        <link href="/css/app.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>
    <body>
        <div class="container">
            <h1>Listagem de produtos</h1>
            <table class="table table-striped table-bordered table-hover">
                @foreach($produtos as $produto)
                <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->valor}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <td>
                            <a href="{{ route('produto.detalhes', [$produto->id]) }}">
                                <span class="fas fa-search"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>