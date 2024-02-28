<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

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
}
