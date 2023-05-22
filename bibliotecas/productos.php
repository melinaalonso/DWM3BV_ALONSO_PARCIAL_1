<?php

function productosTodo(): array {
    $filename = __DIR__ . '/../data/productos.json';
    $jsonContent = file_get_contents($filename);
    $data = json_decode($jsonContent, true);
    $productos = [];

    foreach ($data as $registro) {

        $producto = new self();
        $producto->setProductoId($registro['producto_id']);
        $producto->setTitulo($registro['titulo']);
        $producto->setDetalle($registro['detalle']);
        $producto->setTextoDescripcion($registro['texto_descripcion']);
        $producto->setImagen($registro['imagen']);
        $producto->setImagenDescripcion($registro['imagen_descripcion']);
        $producto->setPrecio($registro['precio']);

        $productos[] = $producto;
    }

        return $productos;
}

function noticiasTraerPorId(int $id): ?Producto {
    $noticias = productosTodo();

    foreach($productos as $producto) {
        if($producto->getProductoId() === $id) {
            return $producto;
        }
    }

    return null;
}
