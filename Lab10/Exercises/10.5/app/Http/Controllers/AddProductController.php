<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddProductController extends Controller
{
    public function add(Request $request) {
        //dd($request->product);
        $id = $request->product;
        $product = DB::table('products')
                        ->where("id", $id)
                        ->get();

        // dd($product[0]);
        
        return view('products.addproduct', [
            'product' => $product[0]
        ]);  
    }
}
