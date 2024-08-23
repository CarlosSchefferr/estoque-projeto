<html>
<head>
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Glegoo:wght@400;700&display=swap" rel="stylesheet">
        <title>Controle de estoque</title>
        <style>
            .logo2 {
                width: 100px;
                height: 60px;
                
            }
            .menu-items {
                font-family: 'Glegoo', serif;
            }
            .copyright {
                font-family: 'Glegoo', serif;

            }
        </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

            <div class="navbar-header">
                <img src="{{ asset('images\Logo2.png') }}" alt="Logo" class="logo2 ">
            </div>

            <div class="nav pe-5 navbar-right menu">
                
    
                <div class="menu-items btn btn-secondary"><a href="/produtos">Listagem</a></div>
                <div class="btn menu-items btn-success"><a href="/produto/novo">Novo</a></div>
            </div>

            </div>

        </nav>

       

        @yield('conteudo')
        <form method="POST" action={{ route('logout') }}>
                    @csrf
                    <div>
                        <input class="menu-items btn btn-danger" type="submit" value="Sair">
                    </div>
        </form>

        <footer class="footer mt-1">
            <p class="copyright">© Projeto Estoque Carlos Augusto.</p>
            
        </footer>

    </div>
</body>
</html>