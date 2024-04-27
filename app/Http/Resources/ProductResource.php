<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'product_id' => $this->id,
            'category_id' => $this->category_id,
            'name_product' => $this->name_product,
            'sku' => $this->sku,
            'image_product' => $this->handleImage(),
            'description' => $this->description,
            'amount' => $this->amount,
            'qty' => $this->qty,
        ];
    }

    public function handleImage() {
        return '/storage/products/' . $this->image_product;
    }
}
