<?php

namespace App\Http\Controllers;

use App\Jobs\ProductCreated;
use App\Jobs\ProductDeleted;
use App\Jobs\ProductUpdated;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    public function show($product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->only('title', 'image'));

        ProductCreated::dispatch($product->toArray());

        return response($product, Response::HTTP_CREATED);
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->only('title', 'image'));

        ProductUpdated::dispatch($product->toArray());

        return response($product, Response::HTTP_ACCEPTED);
    }

    public function destroy(Product $product)
    {
        Product::destroy($product);

        ProductDeleted::dispatch($product->id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
