<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = DB::table('categorias')->where('estado', true)->get();
        return \view('admin.categorias.categorias', compact('categorias'));
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
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $file = $request->file('foto');
        if ($file) {
            $path = public_path() . '/img/categorias';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $categoria->foto = $fileName;
        }
        $categoria->save();
        $request->session()->flash('alert-success', 'Categoria guardada con exito!');

        return \redirect()->route('categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show( $idc )
    {
        $categoria = Categoria::find($idc);
        return \view('admin.categorias.verCategoria', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idc)
    {
        $categoria = Categoria::find($idc);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        $request->session()->flash('alert-success', 'Categoria actualizada con exito!');
        return \redirect()->route('verCategoria', $categoria->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idc)
    {
        $categoria = Categoria::find($idc);
        if( $categoria != null ){
            $categoria->estado = false;
            $categoria->save();
            $request->session()->flash('alert-danger', 'Categoria eliminada con exito!');
            return \redirect()->route('categorias');
        }
    }
}
