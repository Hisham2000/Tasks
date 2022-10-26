<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $categories = json_decode(json_encode($categories),true);
        return view('Categories',['categories'=>$categories]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    
    public function show()
    {  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function searching(Request $request)
    {
        $search = $request->search;
        $category = null;
        $flag=0;
        if($search != null)
        {
            if(filter_var($search, FILTER_VALIDATE_INT)) 
            {
                $category = Category::all()->where('id',$search);
                $flag++;
            }
            else
            {
                $category = Category::all()->where('catName',$search);
                // $data = json_decode($jdata);
                if($category != null)
                $flag++;
            }
        }
        // if($flag == 0)
        // {
        //     $category = Category::all();
        // }
        $category = json_decode(json_encode($category),true);
        // echo "<pre>";
        // var_dump($category);
        // echo "</pre>";
        return view('SearchCategory',['categories'=>$category]);  
    }
}
