<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    
  


    public function store(RegisterRequest $request)
    {
       
        // Valida os dados do formulário de registro usando RegisterRequest
    $validatedData = $request->validated();

    // Cria um novo usuário no banco de dados
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']), // Certifique-se de hashear a senha
    ]);

    // Loga o usuário recém-criado
    Auth::login($user);

    // Redireciona para a página inicial após o login
    return redirect('/login');
    }
    
}
