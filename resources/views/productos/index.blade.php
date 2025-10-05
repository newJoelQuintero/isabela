<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos - Supermercado</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/index.css'])
</head>
<body class="productos">
    <div class="productos__container">
        <h1 class="productos__title">Lista de Productos</h1>

        <div class="productos__actions">
            <a href="{{ route('productos.create') }}" class="productos__button productos__button--add">
                Agregar Producto
            </a>
        </div>

        <table class="productos__table">
            <thead class="productos__table-head">
                <tr>
                    <th class="productos__th">ID</th>
                    <th class="productos__th">Nombre</th>
                    <th class="productos__th">Categoría</th>
                    <th class="productos__th">Precio Compra</th>
                    <th class="productos__th">Precio Venta</th>
                    <th class="productos__th">Stock</th>
                    <th class="productos__th">Acciones</th>
                </tr>
            </thead>
            <tbody class="productos__table-body">
                @foreach($productos as $producto)
                <tr class="productos__row">
                    <td class="productos__cell">{{ $producto->id_producto }}</td>
                    <td class="productos__cell">{{ $producto->nombre_producto }}</td>
                    <td class="productos__cell">{{ $producto->categoria }}</td>
                    <td class="productos__cell">{{ $producto->precio_compra }}</td>
                    <td class="productos__cell">{{ $producto->precio_venta }}</td>
                    <td class="productos__cell">{{ $producto->stock }}</td>
                    <td class="productos__cell productos__cell--actions">
                        <a href="{{ route('productos.edit', $producto->id_producto) }}" class="productos__button productos__button--edit">
                            Editar
                        </a>
                        <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST" class="productos__form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="productos__button productos__button--delete">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
