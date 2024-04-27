<?php

namespace App\Http\Controllers\API;

use App\Helper\SKUGenerator;
use App\Http\Resources\ProductResource;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends BaseController
{
    public function index(Request $request)
    {
        $user = auth()->guard()->user();

        $latest = $request->query('latest') === 'true';

        $productsQuery = Product::where('user_id', $user ? $user->id : null);

        if ($latest) {
            $productsQuery->latest();
        }

        $products = $productsQuery->get();

        return $this->sendResponse(ProductResource::collection($products), 'List Data Product');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name_product' => 'required',
            // 'image_product' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'amount' => 'required|numeric',
            'qty' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('image_product')) {
            $image_product = $request->file('image_product');
            $image_product->storeAs('public/products', $image_product->hashName());
        } else {
            $image_product = null;
        }

        $sku = SKUGenerator::generateSKU();

        if ($request->hasFile('image_product')) {
            $product = Product::create([
                'category_id' => $request->category_id,
                'user_id' => Auth::user()->id,
                'name_product' => $request->name_product,
                'sku' => $sku,
                'image_product' => $image_product->hashName(),
                'description' => $request->description,
                'amount' => $request->amount,
                'qty' => $request->qty,
            ]);
        } else {
            $product = Product::create([
                'category_id' => $request->category_id,
                'user_id' => Auth::user()->id,
                'name_product' => $request->name_product,
                'sku' => $sku,
                'image_product' => $image_product,
                'description' => $request->description,
                'amount' => $request->amount,
                'qty' => $request->qty,
            ]);
        }

        return $this->sendResponse(new ProductResource($product), 'Product added successfully');
    }

    public function show($id)
    {
        $user = auth()->guard()->user();
        $product = Product::where('user_id', $user ? $user->id : null)->find($id);

        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }

        return $this->sendResponse(new ProductResource($product), 'Product retrieved successfully.');
    }

    public function update(Request $request, Product $product)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'category_id' => 'required',
            'name_product' => 'required',
            'amount' => 'required|numeric',
            'qty' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('image_product')) {
            $image_product = $request->file('image_product');
            $image_product->storeAs('public/products', $image_product->hashName());
            Storage::delete('public/products/' . $product->image_product);

            $product->update([
                'category_id' => $request->category_id,
                'name_product' => $request->name_product,
                'sku' => $request->sku,
                'image_product' => $image_product->hashName(),
                'description' => $request->description,
                'amount' => $request->amount,
                'qty' => $request->qty,
            ]);
        } else {
            $product->update([
                'category_id' => $request->category_id,
                'name_product' => $request->name_product,
                'description' => $request->description,
                'amount' => $request->amount,
                'qty' => $request->qty,
            ]);
        }

        return $this->sendResponse(new ProductResource($product), 'The product has been successfully updated');
    }


    public function destroy(Product $product)
    {
        if (!$product) {
            return $this->sendError('Product not found.', [], 404);
        }

        if (!empty($product->image_product)) {
            Storage::delete('public/products/' . $product->image_product);
        }

        $product->delete();

        return $this->sendResponse([], 'Product has been successfully deleted');
    }
}
