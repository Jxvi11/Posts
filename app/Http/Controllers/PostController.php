<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Por defecto la consulta ya la devuelve en orden ascendente.
        $posts = Post::orderBy('titulo','ASC')->paginate(5);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return redirect()->route('inicio');

        $posts = new Post();
        $posts->titulo = 'titulo'.rand();
        $posts->contenido = 'contenido'.rand();
        $posts->save();
        return redirect()->route('posts.index');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "Edición de Posts con id:  $id";
       // return redirect()->route('inicio');
        try{
            $posts = Post::findOrFail($id);
            $posts->titulo = 'titulo'.rand();
            $posts->contenido = 'contenido'.rand();
            $posts->save();

            return redirect()->route('posts.index');

        }catch(Illuminate\Database\QueryException $e) { }
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $posts = Post::findOrFail($id)->delete();
            return redirect()->route('posts.index');

        }catch(Illuminate\Database\QueryException $e) { }
    }

    public function nuevoPrueba(){
        try{
            $posts = new Post();
            $posts->titulo = 'titulo'.rand();
            $posts->contenido = 'contenido'.rand();
            $posts->save();

            return redirect()->route('posts.index');

        }catch(Illuminate\Database\QueryException $e) { }

    }

    public function editarPrueba($id){
        try{
            $posts = Post::findOrFail($id);
            $posts->titulo = 'titulo'.rand();
            $posts->contenido = 'contenido'.rand();
            $posts->save();

            return redirect()->route('posts.index');

        }catch(Illuminate\Database\QueryException $e) { }
    }
}
