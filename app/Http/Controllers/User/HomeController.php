<?php

namespace App\Http\Controllers\User;

use App\category;
use App\group;
use App\Http\Controllers\Controller;
use App\manager;
use App\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Header()
    {
        $about = group::where('id','about')->first();
        $managers = manager::all();
        $header = group::where('id', 'header')->first();
        $categories = category::all();
        $products = product::all();

        for($i = 0 ; $i < sizeof($categories) ; $i++)
        {
            $productss = array();
            foreach($products as $product)
            {
                if($product->category_id == $categories[$i]->id)
                {
                    array_push($productss , $product);  
                }
            }
            $categories[$i]->products = array_unique($productss);
        }
        return view('user.app', ['header' => $header , 'managers' => $managers,
         'about' => $about , 'categories' => $categories , 'products' => $products]);
    }
}
