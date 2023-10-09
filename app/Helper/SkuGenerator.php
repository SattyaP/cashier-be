<?php

namespace App\Helper;

class SKUGenerator
{
    public static function generateSKU()
    {
        $sku = 'SKU-' . strtoupper(uniqid());
        return $sku;
    }
}
