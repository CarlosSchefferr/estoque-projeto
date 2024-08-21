<html>
<head>
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>Controle de estoque</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

            <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">
                        Estoque Laravel
                    </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/produtos">
                            Listagem
                        </a>
                    </li>
                    <li>
                        <a href="/produto/novo">
                            Novo
                        </a>
                    </li>
            </ul>

            </div>

        </nav>
        @yield('conteudo')

        <footer class="footer">
            <p>© Projeto Estoque Carlos Augusto.</p>
        </footer>

    </div>
</body>
</html>