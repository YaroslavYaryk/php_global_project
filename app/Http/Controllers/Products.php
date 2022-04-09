<?php

namespace App\Http\Controllers;
use App\Models\Product_User;
use App\Models\Product;


use Illuminate\Http\Request;

class Products extends Controller
{
    public function order_product(Request $request, $product_id)
    {
        $user = $request->session()->get('user');
        if (!$user){
            return redirect('/login');
        }
        
        $product = Product::where("id", $product_id)->first();

        $product_user = new Product_User();
        $product_user->product_id = $product_id;
        $product_user->user_id = $user->id;
        $product_user->save();

        return redirect("profile/".$user->id);
    }

    public function get_products()
    {
        $products = Product::all();

        return view("products", ["products"=>$products]);
    }

}
