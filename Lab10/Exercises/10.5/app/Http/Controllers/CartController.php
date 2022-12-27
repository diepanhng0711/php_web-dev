<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

session_start();


class CartController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $product = DB::table('products')
            ->where("id", $id)
            ->get();

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
            array_push($_SESSION['cart'], $product[0]->id);
        } else if (array_search($product[0]->id, $_SESSION['cart']) === false) {
            array_push($_SESSION['cart'], $product[0]->id);
        }

        // dd($_SESSION['cart']);

        if (count($_SESSION['cart']) === 0) {
            $product = null;
            dd('null');
        } else {
            $products = DB::table('products')
            ->whereIn("id", $_SESSION['cart'])
            ->get();
        }

        return view('cart.index', [
            'products' => $products
        ]);
    }

    public function showCart()
    {
        $products = DB::table('products')
            ->whereIn("id", $_SESSION['cart'])
            ->get();

        return view('cart.index', [
            'products' => $products
        ]);
    }

    public function delete(Request $request) {
        $action = $request->action;

        $delete = array_search($action,  $_SESSION['cart']);
          
        if (!($delete === false)) {
            unset($_SESSION['cart'][$delete]);
        }

        $products = DB::table('products')
                        ->whereIn("id", $_SESSION['cart'])
                        -> get();


        return view('cart.index', [
            'products' => $products
        ]);
    }

    public function description(Request $request) {
        $id = $request->action;
        $products = DB::table('products')
            ->where("id", $id)
            ->get();

        
        $product = $products[0];
        dd($product[0]);

        return view('products.product', [
            'product' => $product
        ]);
    }
}
