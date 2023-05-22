<?php

require_once __DIR__ . '/bootstrap/autoload.php';

$rutas = [
'home' => [
'titulo' => 'La página Oficial de Harry Potter.',
],
'productos' => [
'titulo' => 'Todos nuestros productos',
],
'detalle_productos' => [
'titulo' => 'Detalle Producto',
],
'404' => [
'titulo' => 'Página no Encontrada',
],
'contacto' => [
'titulo' => 'Contacto',
    ],
    'foro' => [
        'titulo' => 'foro',
            ],
'alumno' => [
   'titulo' => 'Datos del alumno',
     ],
];


$vista = $_GET['s'] ?? 'home';

if(!isset($rutas[$vista])) {
$vista = '404';
}
$rutaConfig = $rutas[$vista];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Wizard Store : <?= $rutaConfig['titulo'];?></title>
    <link rel="stylesheet"  type="text/css" href="css/style.css">
</head>
<body>
<header id="main-header">
    <h1 id="logo">Logo</h1>
</header>
<nav id="navigation">
    <div class="container-fixed">
        <ul>
            <li><a href="index.php?s=home">Home</a></li>
            <li><a href="index.php?s=productos">Productos</a></li>
            <li><a href="index.php?s=contacto">Contacto</a></li>
            <li><a href="index.php?s=foro">Foro</a></li>
            <li><a href="index.php?s=alumno">Alumno</a></li>
        </ul>
    </div>
</nav>
<main class="main-content">
    <?php
    $filename = __DIR__ . '/vistas/' . $vista . '.php';
    if(file_exists($filename)) {
        require $filename;
    } else {
        require __DIR__ . '/vistas/404.php';
    }
    ?>
</main>
<footer>
    <div class="conteiner_footer">
        <ul class="redes_sociales">
            <li><a href="https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&amp;lwv=110"><ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon></a></li>
            <li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon></a></li>
            <li><a href="https://twitter.com/?lang=es"><ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon></a></li>
        </ul>
        <ul class="menu_footer">
            <li><a href="index.php?s=home">Home</a></li>
            <li><a href="index.php?s=productos">Productos</a></li>
            <li><a href="index.php?s=contacto">Contacto</a></li>
            <li><Foro href="index.php?s=foro">Foro</a></li>
            <li><a href="index.php?s=alumno">Alumno</a></li>  
        </ul>
        <p>© copyright 2023 | Melina Sol Alonso </p>
    </div>

</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>


