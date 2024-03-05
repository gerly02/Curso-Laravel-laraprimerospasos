<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class CategoryController extends Controller
{
 
    public function index()
    {
        // echo "Hola mundo";
        // return view('welcome');
        return response() -> json(category::paginate(10));
    }


    public function store(StoreRequest $request)
    {
        return response()->json(category::create($request->validated()));
        // dd($request);
    }

    public function show(Category $category)
    {
        return response() -> json($category);

    }

    public function update(PutRequest $request, Category $category)
    {
        $category -> update($request -> validated());
        return response() -> json($category);
    }

    public function destroy(Category $category)
    {
        //
    }
    
    // Clase 139
    public function all(){
        return response()->json(Category::get());
    }

    // Creación de función Clase 140 
    public function posts(Category $category){
        // $posts=Post::join('categories', "categories.id", "=", "posts.id")
        // ->select("posts.*", "categories.Nombre as category")
        // ->where ("categories.id", $category->id)
        // ->get();

        $posts = Post::with("category")
        ->where("category_id", $category->id)
        ->get();
        return response()->json($posts);
    }
}
