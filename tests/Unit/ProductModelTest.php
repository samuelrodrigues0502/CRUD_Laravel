<?php

namespace Tests\Unit;

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class ProductModelTest extends TestCase
{
    public function test_product_fillable_fields(): void
    {
        $product = new Product();

        $this->assertSame(['name', 'price'], $product->getFillable());
    }
}
