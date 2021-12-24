<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
    include ('header.php')
    ?>
<section class="tienda_contenido"> 

<h1>Tienda</h1>
<nav class="tienda_botonera">
    <ul>
        <li> <a href="tienda.php?producto=sh"> Short </a>
        <li> <a href="tienda.php?producto=rem"> Remeras </a>
        <li> <a href="tienda.php?producto=tops"> Tops </a>
        </li>
    </ul>
</nav>

<!-- ESTRUCTURAS DE CONTROL -->

<?php 

if (isset ($_GET ['producto'])){
switch ($_GET ['producto']){
    case 'sh':
        $producto='Short';
        $materia_prima='algodon';
        $precio='$ 990';
        $img = 'img/fotoshort.jpg';
        break;
    case 'rem':
        $producto='Remeras';
        $materia_prima='algodon';
        $precio='$ 1300';
        $img = 'img/fotoremera.jpeg';
        break;
    case 'tops':
        $producto='Tops';
        $materia_prima='lycra';
        $precio='$ 890';
        $img = 'img/fototop.jpg';
        break;

    }
} else{
    echo"click sobre el producto para mas información";
}

?>
    <div class='producto_descripcion'>
        <h2> <?php echo $producto; ?></h2>
        <h3> <?php echo $materia_prima; ?></h3>
        <h4> <?php echo $precio; ?></h4>
        <div class="contenedor_img">
        <img src="<?php echo $img; ?>" />
    </div>

</section>
</div>

</body>
</html>