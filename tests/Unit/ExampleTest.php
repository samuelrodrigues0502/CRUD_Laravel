<?php

namespace Tests\Unit;

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_product_fillable_fields(): void
    {
        $product = new Product();

        $this->assertSame(['name', 'price'], $product->getFillable());
    }
}
