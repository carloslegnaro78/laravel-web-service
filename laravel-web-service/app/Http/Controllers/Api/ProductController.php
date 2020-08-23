<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreUpdateProductFormRequest;

class ProductController extends Controller
{

    private $product, $totalPage = 10;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index(Request $request)
    {
        $products = $this->product->getResults($request->all(), $this->totalPage);

        return response()->json($products);
    }


    public function store(StoreUpdateProductFormRequest $request)
    {
        $product = $this->product->create($request->all());

        return response()->json($product, 201);
    }


    public function show($id)
    {
    }

    public function update(StoreUpdateProductFormRequest $request, $id)
    {
        if (!$product = $this->product->find($id))
            return response()->json(['error' => 'Not Found'], 404);

        $product->update($request->all());

        return response()->json($product);
    }


    public function destroy($id)
    {
        //
    }
}
