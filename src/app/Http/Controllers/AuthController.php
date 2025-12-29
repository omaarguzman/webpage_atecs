<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $credentials = $request->only("usuario", "password");

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended("/");
        }

        return back()->withErrors([
            "usuario" => "Las credenciales proporcionadas no coinciden.",
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }
}
