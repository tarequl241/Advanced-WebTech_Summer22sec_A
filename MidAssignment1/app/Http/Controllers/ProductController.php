<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function list(){
        
        $product = Product::all();
        
        return view('product.list')
               ->with('product',$product);
    }
    //

    function create(){
        return view('product.create');
    }
    function createSubmit(Request $req){

        //$req->validate([],[]);
        $this->validate($req,
             [
                "name"=>"required|max:30",
                "id"=>"required",
                "mandate"=>"required",
                "price"=>'required',
                
             ],
             [
                 "name.required"=> "Please provide your name",
                 "name.max"=> "Name should not exceed 30 characters"
             ]
            );

            $p1 = new Product();
            $p1->p_id = $req->id;
            $p1->name = $req->name;
            $p1->mandate = $req->mandate;
            $p1->price = $req->price;
            $p1->save(); //insert query will run

        return "Submitted with valid value";
        
    }
}