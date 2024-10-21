<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product; 


class ProductController extends Controller
{
    //this method will show products page 
    public function index(){
        return view('product/list');
        
    }
    // this method will show create product page 
    public function create(){
        return view('product.create');
    }
    // this method will store a product on DB
    public function store(Request $request){
        $rules = [
            // minimum value 5 chararcter 
            'name' => 'required|min:5',
            // sku minimum 3 digit 
            'sku' => 'required|min:3',
            'price' => 'required|numeric',

        ];
        $validator = validator::make($request->all(),$rules);

        if($validator->fails()){
            // withinputs()  -> our inputs will not clear after the errors 
            return redirect()->route('product.create')->withInput()->withErrors($validator);
        }

        // here we insert the product in DB 
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('product.index')->with('success','product created successfully');


    }
    // this method will show edit product page 
    public function edit(){

    }
    // this method will show update product page 
    public function update(){

    }
    // this method will show delete a product 
    public function destroy(){

    }
}
