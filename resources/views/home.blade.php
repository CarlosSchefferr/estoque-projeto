
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Sistema de Estoque</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Glegoo:wght@400;700&display=swap" rel="stylesheet">
    <style>
   

        body {
            background-color: #337ab7;
            align-items: center;
            justify-content: center;
            display: flex;

        }

        .container {
            
            border-radius: 10px;
            margin-top: 50px;
            border-color: black;
            width: 800px;
            height: 400px;
            background-color: white;
            
            

        }

        .welcome-title {
            font-family: 'Glegoo', serif;
            font-size: 2.5rem;
            margin-top: 20px;
        }

        .welcome-text {
            font-family: 'Glegoo', serif;
            font-size: 1.5rem;
            margin-top: 10px;
        }

        .btn-custom {
            font-family: 'Glegoo', serif;
            font-size: 1.2rem;
            margin-top: 20px;
            
        }

        .card-body {
            font-family: 'Glegoo', serif;
            font-size: 1.5rem;
            margin-top: 20px;
        }

    </style>
</head>

@auth

<div class="container text-center">
        <img src="{{ asset('images\Logo.png') }}" alt="Logo" class="logo mt-5">

        <div class="card-body">Bem Vindo, <span style="color: #337ab7">{{ Auth::user()->name }}</span>!</div>
        <p class="welcome-text">Gerencie seu estoque de forma fácil e eficiente.</p>
        <div class=" flex mt-4 align-items-colum">
            <a href="/produtos" class="btn btn-primary btn-custom mr-4">Acessar meu Estoque</a>
        </div>
</div>

@endauth

@guest
    <div class="container text-center">
        <img src="{{ asset('images\Logo.png') }}" alt="Logo" class="logo mt-5">

        <h1 class="welcome-title">Bem-vindo ao Sistema de Estoque</h1>
        <p class="welcome-text">Gerencie seu estoque de forma fácil e eficiente.</p>
        <div class=" flex mt-4 align-items-colum">
            <a href="{{ route('login') }}" class="btn btn-primary btn-custom mr-4">Acessar Estoque</a>
            <a href="{{ route('register') }}" class="btn btn-success btn-custom">Cadastrar-se</a>
          
        </div>
    </div>
@endguest
