<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show(): View
    {
        return view('products.index', [
            'products' => Products::all()->orderby('price')
        ]);
    }
}