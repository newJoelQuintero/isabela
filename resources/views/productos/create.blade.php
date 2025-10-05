<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto - Supermercado</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/index.css'])
</head>
<body class="form">
    <div class="form__container">

        <h1 class="form__title">Agregar Producto</h1>

        @if ($errors->any())
            <div class="form__error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form__body" action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="form__group">
                <label class="form__label">Nombre del producto</label>
                <input class="form__input" type="text" name="nombre_producto" value="{{ old('nombre_producto') }}" required>
            </div>

            <div class="form__group">
                <label class="form__label">Categoría</label>
                <input class="form__input" type="text" name="categoria" value="{{ old('categoria') }}" required>
            </div>

            <div class="form__group">
                <label class="form__label">Descripción</label>
                <textarea class="form__textarea" name="descripcion">{{ old('descripcion') }}</textarea>
            </div>

            <div class="form__group">
                <label class="form__label">Precio de compra</label>
                <input class="form__input" type="number" name="precio_compra" step="0.01" value="{{ old('precio_compra') }}" required>
            </div>

            <div class="form__group">
                <label class="form__label">Precio de venta</label>
                <input class="form__input" type="number" name="precio_venta" step="0.01" value="{{ old('precio_venta') }}" required>
            </div>

            <div class="form__group">
                <label class="form__label">Stock</label>
                <input class="form__input" type="number" name="stock" value="{{ old('stock') }}" required>
            </div>

            <button class="form__button" type="submit">Guardar Producto</button>
        </form>

        <a class="form__link" href="{{ route('productos.index') }}">Volver al listado</a>
    </div>
</body>
</html>
