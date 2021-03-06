<?php

namespace App\Http\Controllers;

use App\Category;
use App\Receipe;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(auth()->user()->name);
        $data = Receipe::where('author_id',auth()->id())->get();
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
         return view('create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $validatedData = request()->validate([
        'name' => 'required',
        'ingredients' => 'required',
        'category' => 'required',
        ]);

        // $receipe = new Receipe();

        // $receipe->name = request()->name;
        // $receipe->ingredients = request()->ingredients;
        // $receipe->category = request()->category;

        // $receipe->save();
        // dd(request()->all());

        Receipe::create($validatedData + ['author_id' => auth()->id()]);
        // Receipe::create([
        //     'name' => request()->name,
        //     'ingredients' => request()->ingredients,
        //     'category' => request()->category,

        // ]);

        return redirect('receipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe)
    {
        
        $this->authorize('view',$receipe);
        // dd($receipe->categories->name);
        return view('show', compact('receipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipe $receipe)
    {
        $this->authorize('view',$receipe);
        $category = Category::all();
        
        // dd($receipe);
       return view('edit', compact('receipe','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipe $receipe)
    {
        $this->authorize('view',$receipe);
        $validatedData = request()->validate([
        'name' => 'required',
        'ingredients' => 'required',
        'category' => 'required',
        ]);

        // $receipe = Receipe::find($receipe->id);

        // $receipe->name = request()->name;
        // $receipe->ingredients = request()->ingredients;
        // $receipe->category = request()->category;

        // $receipe->save();
        $receipe->update($validatedData);
        return redirect('receipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe)
    {
        $this->authorize('view',$receipe);
        $receipe->delete();
        return redirect('receipe');
    }
}



