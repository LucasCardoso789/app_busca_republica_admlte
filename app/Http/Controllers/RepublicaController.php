<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Republica;
use App\Models\Endereco;
use App\Models\States;
use App\Models\Cities;
use Illuminate\Support\Facades\Http;

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
        
        $endereco = Endereco::all();
        $republicas = Republica::paginate(5);
        
        return view('republicas.listar_republicas', ['republicas' => $republicas, 'request' => $request->all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* ddd($estados->name(0)); */
        return view('republicas.adicionar_republicas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* ddd($request); */

        $regras = [
            'nome' => 'required|min:3|max:40',
            'quant_quartos' => 'required|between:1,10|numeric',
            'preco' => 'required|between:50,10000|numeric',
            'descricao' => 'required|min:3|max:100',
            'regras' => 'nullable',
            'contato' => 'required|numeric',
            'rua' => 'required|min:3|max:100',
            'numero' => 'required|between:1,10000|numeric',
            'complemento' => 'nullable',
            'bairro' => 'required|min:3|max:50',
            'estado' => 'required',
            'cidade' => 'required',
            'cep' => 'required|min:8|numeric'

        ];

        $feedback = [
            'quant_quartos.required' => 'O campo quantidade de quartos é obrigatório',

        ];

        $request->validate($regras, $feedback);

        $republica = new Republica();
        $endereco = new Endereco();
        $republica->nome = $request->get('nome');
        $republica->quant_quartos = $request->get('quant_quartos');
        $republica->preco = $request->get('preco');
        $republica->descricao = $request->get('descricao');
        $republica->regras = $request->get('regras');
        $republica->contato = $request->get('contato');
        $endereco->rua = $request->get('rua');
        $endereco->numero = $request->get('numero');
        $endereco->bairro = $request->get('bairro');
        $endereco->cidade = $request->get('cidade');
        $endereco->estado = $request->get('estado');
        $endereco->cep = $request->get('cep');
        $endereco->complemento = $request->get('complemento');
        $republica->save();
        $republica->Endereco()->save($endereco);
        

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
        $republicas = Republica::find($id);
        $enderecos = Endereco::all();
        $enderecoMatch = null;
        foreach($enderecos as $endereco){
            if($endereco->republica_id == $id)
                $enderecoMatch = $endereco;
        }

            
        return view('republicas.visualizar_republicas', ['republicas' => $republicas, 'enderecoMatch' => $enderecoMatch]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $republicas = Republica::find($id);
        $enderecos = Endereco::all();
        foreach($enderecos as $endereco){
            if($endereco->republica_id == $id)
                $enderecoMatch = $endereco;
        }

        return view('republicas.atualizar_republicas', ['republicas' => $republicas, 'enderecoMatch' => $enderecoMatch]);
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
            'nome' => 'required|min:3|max:40',
            'quant_quartos' => 'required|between:1,10|numeric',
            'preco' => 'required|between:50,10000|numeric',
            'descricao' => 'required|min:3|max:100',
            'contato' => 'required|numeric',
            'rua' => 'required|min:3|max:100',
            'numero' => 'required|between:1,10000|numeric',
            'bairro' => 'required|min:3|max:50',
            'estado' => 'required',
            'cidade' => 'required',
            'cep' => 'required|min:8|numeric'
        ];

        $feedback = [
            'quant_quartos.required' => 'O campo quantidade de quartos é obrigatório',

        ];
        
        $request->validate($regras, $feedback);

        $republica = Republica::find($id);

        $enderecos = Endereco::all();
        foreach($enderecos as $endereco){
            if($endereco->republica_id == $id)
                $enderecoMatch = $endereco;
        }


        $republica->update($request->all());
        $enderecoMatch->update($request->all());

        return redirect()->route('republica.show', ['republica' => $republica->id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $republica = Republica::find($id);
        $enderecos = Endereco::all();
        foreach($enderecos as $endereco){
            if($endereco->republica_id == $id)
                $enderecoMatch = $endereco;
        }
        $delete_endereco_find = $enderecoMatch->id;
        

        $delete_endereco = Endereco::find($delete_endereco_find);

        $delete_endereco->delete();
        $republica->delete();
        
        return redirect()->back();
    }
}
