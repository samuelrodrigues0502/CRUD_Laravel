<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/all.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <div class="content-wrapper" style="margin-left:0">
        <section class="content pt-4">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Editar Produto</h3>
                            </div>
                            <form action="{{ route('products.update', $product) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="name">Nome:</label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Preço:</label>
                                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01" min="0" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning">Atualizar</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
