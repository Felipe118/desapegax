<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name_category' => 'required|unique:categorias,name_category'
        ];
        $feedback = [
            'required' => 'O campo categoria é obrigatório',
            'name_category.unique' => 'Categoria já existente'
        ];

        $request->validate($rules,$feedback);

        Categoria::create($request->all());

        session()->flash('message_category', 'Categoria cadastrada com sucesso');
        return redirect()->route('categoria.create');
    }

    /**
     * Display the specified resource.
     * @param \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('category.edit_category',['categoria' => $categoria] );
    }

    public function list()
    {
        $categorias = Categoria::all();
        return view('category.list_category',['categorias'=> $categorias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
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
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
       
        $rules = [
            'name_category' => [
                'required',
                Rule::unique('categorias')->ignore($categoria->id),
            ]
        ];
        $feedback = [
            'required' => 'O campo categoria é obrigatório',
            'name_category.unique' => 'Categoria já existente'
        ];

        $request->validate($rules,$feedback);

        $categoria->name_category = $request->name_category;
        $categoria->save();

        return redirect()->route('categoria.list');
       
       //Categoria::update($request->all());
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
       $categoria->delete();
       return redirect()->route('categoria.list');
    }
}
