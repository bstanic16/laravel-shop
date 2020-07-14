<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //Vraca sve proizvode
        $products = Product::all();
        return view('product.show',['products' => $products]);
    }

    public function show(Product $product)
    {
        //vraca ime kompanije
//        dd($product->company->name);
        //Vraca kategoriju proizvoda
        //$product->category->name
        return view('product.detail',['product'=> $product]);
    }

    public function create()
    {
        $categories = Category::all();
        $companies = Company::all();
        return view('product.create',['categories' => $categories, 'companies' => $companies]);
    }

    public function store(CreateProductRequest $request)
    {
        Product::query()->create($request->only(['name','category_id','company_id','description','price']));
        return redirect('/products');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $companies = Company::all();
        return view('product.edit',['categories' => $categories, 'companies' => $companies,'product' => $product]);
    }

    public function update(CreateProductRequest $request, Product $product)
    {
//        dd($request->all());
        $product->update($request->only(['name','category_id','company_id','description','price']));
        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }

    public function onSale()
    {
        $prs = [];
        $products = Product::all();
        foreach ($products as $product)
        {
            if($product->onSale){
                $prs[] = $product;
            }
        }
        //napravi view za Sales i to je to
        return view('product.onSale',['products' => $prs]);
    }
}
