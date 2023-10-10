<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegistrarUsuarios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('registrarUser');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $usuario = $request->all();

        User::create([
        'name' => $usuario['name'],
       'email' => $usuario['email'],
       //'email_verified_at' => 'string|required',
       'password' => Hash::make($usuario['password'])
       ]);
       return  Redirect::route('loginIndex')->with('success', 'Produto Alterado Com Sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
