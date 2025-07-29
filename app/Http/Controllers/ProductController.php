namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
<?php
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validação simples
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        // Cria o produto
        Product::create($validated);

        // Redireciona para a lista com mensagem
        return redirect()->route('products.index')->with('success', 'Produto cadastrado com sucesso!');
    }

}
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
}
