<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Http\Requests\CreateCategoryRequests;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category =  Category::all();
        $products = Product::all()->random(6);
        return view('category/categoryShow',['data' => $category,'products' => $products]);
    }

    public function show(Category $category)
    {
//        dd($category->products()->paginate(5));
        //Vraca sve proizvode iz jedne kategorije
        return view('category.detail',['products'=>$category->products()->get(),'name' => $category->name]);
    }


    public function edit(Category $category)
    {
        return view('category.edit',['category' => $category]);
    }

    public function update(CreateCategoryRequests $request, Category $category)
    {
        $category->update($request->only(['name']));
        return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories');
    }
}
