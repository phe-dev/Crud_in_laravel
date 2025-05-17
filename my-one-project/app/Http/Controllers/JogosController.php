<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
      
        
        $jogos = Jogo::all();
        //dd($jogos);
        return view('jogos.index', ['jogos'=>$jogos]);

    }

    public function create() {
        return view('jogos.create');
    }

    public function store(Request $request) 
    {
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }
}
