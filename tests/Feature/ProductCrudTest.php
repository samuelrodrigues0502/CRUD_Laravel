<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_it_creates_a_product(): void
    {
        $response = $this->post(route('products.store'), [
            'name' => 'Teclado',
            'price' => 199.90,
        ]);

        $response->assertRedirect(route('products.index'));
        $this->assertDatabaseHas('products', [
            'name' => 'Teclado',
            'price' => 199.90,
        ]);
    }

    public function test_it_updates_a_product(): void
    {
        $product = Product::create([
            'name' => 'Mouse',
            'price' => 99.90,
        ]);

        $response = $this->put(route('products.update', $product), [
            'name' => 'Mouse Gamer',
            'price' => 129.90,
        ]);

        $response->assertRedirect(route('products.index'));
        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Mouse Gamer',
            'price' => 129.90,
        ]);
    }

    public function test_it_deletes_a_product(): void
    {
        $product = Product::create([
            'name' => 'Monitor',
            'price' => 799.90,
        ]);

        $response = $this->delete(route('products.destroy', $product));

        $response->assertRedirect(route('products.index'));
        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
        ]);
    }
}
