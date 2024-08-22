<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        // Tenta autenticar o usuário com as credenciais fornecidas
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redireciona para a página originalmente acessada
            return redirect()->intended('/home');
        }

        // Redireciona de volta com uma mensagem de erro se a autenticação falhar
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }
}
