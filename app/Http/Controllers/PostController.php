<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Taste;
use App\Balance;
use Storage;

class PostController extends Controller
{
    public function add(Taste $taste, Balance $balance)
    {
        return view('recipes/create')->with(['tastes' => $taste->get(),
                                        'balances' => $balance->get()]);
    }
    
    public function index(Recipe $recipe)
    {
        return view('recipes/index')->with(['recipes' => $recipe->get()]);
    }
    
    public function create(Request $request, Taste $taste, Balance $balance)
    {
        return view('recipes/create')->with(['tastes' => $taste->get(),
                                        'balances' => $balance->get()]);
    }
    
    
    public function store(Request $request, Recipe $recipe)
    {
        $input = $request['recipe'];
        $recipe->fill($input);
        $recipe->user_id = 1;
        $recipe->taste_id = 1;
        $recipe->balance_id = 1;
        
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
        $recipe->image_path = Storage::disk('s3')->url($path);
        
        $recipe->save();
        return redirect('/');
    }
    
}
