<h1>Cadastrar Produto</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="price">Preço:</label>
        <input type="number" name="price" id="price" step="0.01" required>
    </div>
    <button type="submit">Salvar</button>
</form>
