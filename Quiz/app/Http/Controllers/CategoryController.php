<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Category\CategoryCollection;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }
    public function index()
    {
        return CategoryCollection::collection(Category::paginate(5));
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category= new Category;
        $category->title=$request->title;
        $category->save();
        return response([
            'data'=> new CategoryResource($category)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

  
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return response([
            'data'=> new CategoryResource($category)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response([null,Response::HTTP_NO_CONTENT]);
    }
}
