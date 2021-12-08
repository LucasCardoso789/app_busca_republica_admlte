<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Republica;

class RepublicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $republica = Republica::where('nome');
        return view('listar_republicas', ['republica' => $republica, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adicionar_republicas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request); */

        $regras = [
            'nome' => 'required|min:3|max:40',
            'quant_quartos' => 'required|between:1,10|numeric',
            'preco' => 'required|between:50,10000|numeric',
            'descricao' => 'required|min:3|max:100',
            'contato' => 'required|numeric'
        ];

        $feedback = [
            'quant_quartos.required' => 'O campo quantidade de quartos é obrigatório',

        ];

        $request->validate($regras, $feedback);

        $republica = new Republica();
        $republica->nome = $request->get('nome');
        $republica->quant_quartos = $request->get('quant_quartos');
        $republica->preco = $request->get('preco');
        $republica->descricao = $request->get('descricao');
        $republica->regras = $request->get('regras');
        $republica->contato = $request->get('contato');
        $republica->save();

        return redirect()->route('republica.index');
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
        //
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
        //
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
