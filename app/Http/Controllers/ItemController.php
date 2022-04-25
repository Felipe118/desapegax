<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Categoria;
use App\Models\Image;
use Illuminate\Http\Request;

class ItemController extends Controller
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
        $categorias = Categoria::all();
        return view('announce.create_announce', ['categorias' => $categorias]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
        // $rules = [];
        // $feedback = [];

        // $request->validate($rules,$feedback);
     // dd($request->all());
        $id = $_SESSION['id'];
       
        //dd($request->image);
        

        
        
       $item = Item::create([
                'name' => $request->name,
                'price' => $request->price,
                'active' => 1,
                'description' => $request->description,
                'categoria_id'=> $request->categoria_id,
                'user_id' => $id
            ]);

            for($i = 0; $i < count($request->image); $i++){
                $image = $request->image[$i];
               // dd($image);
                $imageModel = new Image();
                $imageModel->item_id = $item->id;
                $imageModel->path = $image->file->store('img_announce','public');
                unset($imageModel);
        
            }

            if(!$item){
                session()->flash('message_announce_error', 'Erro ao cadastrar o item');
                return redirect()->route('');
            }
            session()->flash('message_announce_success', 'Item cadastrado');
            return redirect()->route('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
