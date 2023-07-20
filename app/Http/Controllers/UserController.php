<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $regras =[
            'nome' => 'required|min:3|max:50',
            'email' => 'required|email|min:3|unique:users',
            'senha' =>  'required|min:3',
            'confirmPassword' => 'required|same:senha'
        ];

        $feedback = [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Digite um email válido.',
            'email.unique' => 'Este email já está em uso.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter pelo menos 6 caracteres.',
            'confirmPassword.required' => 'O campo confirmar senha é obrigatório.',
            'confirmPassword.same' => 'A senha e a confirmação de senha devem ser iguais.',
        ];
        $request->validate($regras, $feedback);
        $user = new User();
        $user->email = $request->input('email');
        $user->name = $request->input('nome');
        $user->password = Hash::make($request->input('senha'));
        $user->save();
        return redirect()->route('app.login');
    }
    public function login(Request $request){
        $regras =[
            'email' => 'required|email|min:3',
            'password' =>  'required|min:3',
        ];

        $feedback = [
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Digite um email válido.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
        ];
        $request->validate($regras, $feedback);
        $credenciais = $request->only('email', 'password');
        if  (auth()->attempt($credenciais)) {
            // Autenticação bem-sucedida
            $user = auth()->user();
            $token = auth()->attempt($credenciais);
            Cookie::queue('token', $token, 1440);
            return redirect()->route('menu');
        }
    
        // Autenticação falhou
        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);

    }
    public function registerForm(){
        return view('register');
    }
    public function loginForm(){
        return view('login');
    }
    public function logout() {
    Auth::logout();
    return redirect()->route('api/menu');
    }
}
