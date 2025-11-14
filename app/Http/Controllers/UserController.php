<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function login()
    {
        return view('users.login');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
    
            return redirect()->route('user.create')->with('success', 'Utilizador criado com sucesso!');
        } catch (Exception $e) {
            $err = (array) $e->getPrevious();
            return back()->withInput()->with('error', 'Não foi possível cadastrar o novo utilizador. ' . $err['errorInfo'][2]);
        }
    }
}