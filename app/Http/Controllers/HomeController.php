<?php

namespace App\Http\Controllers;

use App\Models\Republica;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $republicas = Republica::all();
        return view('painel_principal', ['republicas' => $republicas]);
    }
}
