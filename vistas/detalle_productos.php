<?php
$producto = (new Producto())->traerPorId($_GET['id']);
?>
<section class="container">
    <article class="productos-detalle">
        <div class="detalle-imagen-producto">
            <picture class="product-item_imagen">
                <source srcset="<?= 'img/' . $producto->getImagen(); ?>" media="all and (min-width: 46.875em)">
                <img src="imgs/<?= $producto->getImagen(); ?>" alt="<?= $producto->getImagenDescripcion(); ?>">
            </picture>
        </div>
        <div class="producto-div">
            <a href="index.php?s=productos">Volver atrás</a>
            <h1><?= $producto->getTitulo(); ?></h1>
            <p><?= $producto->getPrecio(); ?></p>
            <p><?= $producto->getDetalle(); ?></p>
            <p><?= $producto->getTextoDescripcion(); ?></p>

            
        </div>
    </article>
</section>