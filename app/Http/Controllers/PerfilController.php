<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $usuario = auth()->user()->id;
        
        $user = auth()->user()->name;
        $email = auth()->user()->email;

        $created_at = auth()->user()->created_at;
        $separarCriacao = explode(" ", $created_at);
        $timestamp = strtotime($separarCriacao[0]); 
        $newDateCreated = date("d-m-Y", $timestamp);
        $newDateCreatedTrue = $newDateCreated. " " .$separarCriacao[1];
        

        $updated_at = auth()->user()->updated_at;
        $separarAtualizacao = explode(" ", $updated_at);
        $timestamp = strtotime($separarAtualizacao[0]); 
        $newDateUpdated = date("d-m-Y", $timestamp );
        $newDateUpdatedTrue = $newDateUpdated. " " .$separarAtualizacao[1];

        
        
        
        return view('perfis.index',['user' => $user, 'email' => $email, 'newDateCreatedTrue' => $newDateCreatedTrue, 'newDateUpdatedTrue' => $newDateUpdatedTrue, 'usuario' => $usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = auth()->user()->id;

        $user = auth()->user()->name;
        $email = auth()->user()->email;

        return view('perfis.update', ['user' => $user, 'email' => $email, 'usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $regras = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']
        ];

        $request->validate($regras);

        $perfil = User::find($id);
        $perfil->update($request->all());
        return redirect()->route('perfil.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
