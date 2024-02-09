<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() {
        return view('login.index');
    }
    public function register() {
        return view('login.register');
    }

    public function show() {
        return view('home.dashboard');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Criação do usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Gerar token JWT
        $token = JWTAuth::fromUser($user);

        session(['user' => $user]);
        return redirect()->route('formL');
        // return response()->json(compact('user', 'token'), 201);
        // return to_route('formL');
    }
    
    public function login(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ], [
            'name' => 'Nome incorreto',
            'email' => 'email incorreto',
            'password' => 'Senha incorreta',
        ]);
        $credentials = $request->only('name','email', 'password');
        $user = User::where('name', $credentials['name'])->orWhere('email', $credentials['email'])->first();
        if (!$user || strlen($user->password) == 0 || !Hash::check($credentials['password'], $user->password)) {
            return redirect()->back()->withErrors(['login' => 'Credenciais inválidas, verifique novamente!'])->withInput();
        }

        // return response()->json(compact('token'));
        $dadosUser = Auth::attempt($credentials);
        // dd($dadosUser);
        return to_route('dashboard', ['userLogado' => $dadosUser]);
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
