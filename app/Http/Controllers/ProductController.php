<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        $products = [
            ['id' => 1, 'name' => 'Product 1', 'price' => 10.99],
            ['id' => 2, 'name' => 'Product 2', 'price' => 20.99],
            ['id' => 3, 'name' => 'Product 3', 'price' => 30.99],
            ['id' => 4, 'name' => 'Product 4', 'price' => 40.99],
            ['id' => 5, 'name' => 'Product 5', 'price' => 50.99],
        ];
        return response()->json($products);
    }
}
