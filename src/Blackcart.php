<?php

namespace Astrogoat\Blackcart;

use Astrogoat\Shopify\Models\Product;
use Astrogoat\Shopify\Models\ProductVariant;
use Illuminate\Support\Str;

class Blackcart
{
    private $product;

    public function product(Product|ProductVariant $product)
    {
        $this->product = $product;

        return $this;
    }

    public function dataAttributes()
    {
        return collect($this->product->tags)
            ->filter(function ($tag) {
                return Str::startsWith($tag, 'blackcart:');
            })
            ->push('blackcart:product')
            ->map(function ($tag) {
                $data = Str::after($tag, 'blackcart:');

                return "data-blackcart-{$data}";
            })
            ->implode(' ');
    }
}
