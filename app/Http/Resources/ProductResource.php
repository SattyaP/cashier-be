<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'product_id' => $this->id,
            'category_id' => $this->Category->name,
            'name_product' => $this->name_product,
            'sku' => $this->sku,
            'image_product' => $this->image_product,
            'description' => $this->description,
            'amount' => $this->amount,
            'qty' => $this->qty,
        ];
    }
}
