<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto - Supermercado</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/index.css'])
</head>
<body class="form">
    <div class="form__container">
        <h1 class="form__title">Editar Producto</h1>

        @if ($errors->any())
            <div class="form__error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.update', $producto->id_producto) }}" method="POST" class="form__body">
            @csrf
            @method('PUT')

            <div class="form__group form__group--full">
                <label class="form__label">Nombre del producto:</label>
                <input type="text" name="nombre_producto" value="{{ $producto->nombre_producto }}" class="form__input" required>
            </div>

            <div class="form__group">
                <label class="form__label">Categoría:</label>
                <input type="text" name="categoria" value="{{ $producto->categoria }}" class="form__input" required>
            </div>

            <div class="form__group">
                <label class="form__label">Stock:</label>
                <input type="number" name="stock" value="{{ $producto->stock }}" class="form__input" required>
            </div>

            <div class="form__group form__group--full">
                <label class="form__label">Descripción:</label>
                <textarea name="descripcion" class="form__textarea">{{ $producto->descripcion }}</textarea>
            </div>

            <div class="form__group">
                <label class="form__label">Precio de compra:</label>
                <input type="number" name="precio_compra" step="0.01" value="{{ $producto->precio_compra }}" class="form__input" required>
            </div>

            <div class="form__group">
                <label class="form__label">Precio de venta:</label>
                <input type="number" name="precio_venta" step="0.01" value="{{ $producto->precio_venta }}" class="form__input" required>
            </div>

            <button type="submit" class="form__button">Actualizar Producto</button>
        </form>

        <a href="{{ route('productos.index') }}" class="form__link">Volver al listado</a>
    </div>
</body>
</html>
