<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){

    }

    public function create(){
        return inertia("Dashboard/Category/Create");
    }

    public function store(Request $request){
        /* $catergory = new Category();
        $category->title = $request->;
        $category->slug = $request->;
        $category->save();

        return ; */
        Category::create([
            'title' => request('title'),
            'slug' => request('slug'),
        ]);
        dd($request->all());
    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
