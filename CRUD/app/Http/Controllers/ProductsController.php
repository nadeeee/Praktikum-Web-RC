<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\category;
class ProductsController extends Controller
{
    public function show(){
        
        $categories = category::all();
        return view('create',compact('categories'));
    }

    
    // public function store(Request $request)
    // {
    //     Product::create($request->all());
    //     return redirect('/products');
    // }
    public function store(Request $request){
       
        $request->validate([
            'product_name'=> 'required|max:24|min:3',
            'price'=> 'required',
            'stock'=> 'required'
        ]);
        // cara pertama Product::create($request->all()); klo sesuai urutan ama  db pake ini aja cepet klo ga sesuai pake yang kedua
        //cara kedua kiri nama table db yang kanan dari tag name identifier
        Product::create([
            'category_id'=> $request-> category_id,
            'product_name'=> $request-> product_name,
            'price'=> $request-> price,
            'stock'=> $request-> stock
        ]);
        return back();
    }

    public function viewProducts(){
        
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function editProducts($id){
        //dipake klo cuma mau 1 data doang klo where banyak data
        //$product = Product::findOrFail($id);
        $product = Product::where('id', $id)->first();
        return view('edit', compact('product'));
    }

    public function update(Request $request, $id){

        Product::where('id',$id)->update([
            'product_name'=> $request-> product_name,
            'price'=> $request-> price,
            'stock'=> $request-> stock
        ]);

        return redirect('/products');
    }

    public function delete($id){
        
        Product::destroy($id);
        return back();
    }
}
