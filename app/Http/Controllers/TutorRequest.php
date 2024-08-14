<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class TutorRequest extends Controller
{
    
    public function index()
    {
       return view('guardian.teacherRequest');
    }

    
function teacher_request_insert()
    {
       echo 'mojib ';
    }
  
/*
    public function store(Request $request){
    echo"<pre>";
    print_r($request->all());

   $product = new Product;
   $product->name = $request['name'];
   $product->email = $request['email'];
   $product->password = md5($request['password']);
   $product->save();
    }
    */
}

