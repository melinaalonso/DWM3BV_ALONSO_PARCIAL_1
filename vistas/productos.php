<?php

$productos = (new Producto())->todo();
?>
    <h1>Todos los productos de nuestra tienda</h1>
<section class="container-productos">
    <?php
    foreach($productos as $producto):
        ?>
        <div class="card">
            <article class="producto-card">
                    <a href="index.php?s=detalle_productos&id=<?= $producto->getProductoId();?>"><h2><?= $producto->getTitulo()?></h2></a>
                <picture class="producto-imagen">
                    <source srcset="<?= 'img/' . $producto->getImagen();?>">
                    <img class="imagen-productos" src="img/<?= $producto->getImagen();?>" alt="<?= $producto->getImagenDescripcion();?>">
                </picture>
                <p><?= $producto->getPrecio();?></p>  
                <p><?= $producto->getDetalle();?></p>
              

            </article>
        </div>
    <?php
    endforeach;
    ?>
</section>
