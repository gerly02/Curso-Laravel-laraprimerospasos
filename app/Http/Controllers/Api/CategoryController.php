<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        dd($request);
    }

    public function show(Category $category)
    {
        return response() -> json($category);

    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
