<h1>Lista de Produtos</h1>

<a href="{{ route('products.create') }}">Cadastrar novo produto</a>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhum produto cadastrado.</td>
            </tr>
        @endforelse
    </tbody>
</table>
