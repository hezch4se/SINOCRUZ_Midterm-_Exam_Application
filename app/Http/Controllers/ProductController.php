<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $theme = "Gadgets";

        $products = [
            ["name" => "Smartphone", "price" => 15000, "stock" => 10],
            ["name" => "Laptop", "price" => 45000, "stock" => 5],
            ["name" => "Wireless Earbuds", "price" => 2000, "stock" => 20],
            ["name" => "Smartwatch", "price" => 3500, "stock" => 12],
        ];

        return view('products', compact('theme', 'products'));
    }
}
