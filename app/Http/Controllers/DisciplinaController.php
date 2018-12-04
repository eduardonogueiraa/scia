<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Disciplina; 

class DisciplinaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplinas = \App\Disciplina::all();
        return view('disciplina.disciplina', compact('disciplinas'));
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
    public function store()
    {
        $disciplina = new Disciplina; 
        $disciplina->nome = Input::get('nome');
        $disciplina->save(); 

        return redirect()->to (route('disciplina'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $disciplina = Disciplina::find($id); 
        return view('disciplina.editar', compact('disciplina'));
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
        $nome = Input::get('nome');
        DB::table('disciplinas')->where ('id', $id)-> update (['nome' => $nome]);
        return redirect()->to (route('disciplina'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('disciplinas')-> where('id', $id)-> delete(); 
        return redirect()->to (route('disciplina'));
    }
}
