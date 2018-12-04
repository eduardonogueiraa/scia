<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Postagem; 

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $postagem = new Postagem;
        $postagem->tema = Input::get('tema');
        $postagem->descricao = Input::get('descricao');
        $postagem->id_disciplina = Input::get('id_disciplina');
        $postagem->id_usuario = auth()->user()->id; 
        // from Model
        $postagem->save ();

        return redirect()->to (route('inicial'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Input::get('id');
        $postagens = DB::table('postagens')->where('id_disciplina', '=', $id)->get();
        $disc = \App\Disciplina::all();
        return view('postagem.mostrar', compact(['postagens','disc']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Postagem::find($id); 
        return view('postagem.editar', compact('post'));
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
        $tema = Input::get('tema');
        DB::table('postagens')->where ('id', $id)-> update (['tema' => $tema]);
        $descricao = Input::get('descricao'); 
        DB::table('postagens')->where('id', $id)->update(['descricao'=>$descricao]);

        return redirect()->to (route('inicial'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('postagens')-> where('id', $id)-> delete(); 
        return redirect()->to (route('inicial'));  
    }
}
