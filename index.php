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
<h1>Mall Deportivo</h1>

<?php 
include('header.php')
?>

<h2> Precios ropa deportiva </h2>
<section class="hombres">
<?php 
 $texto= 'Hombres'; 
 $precio_remeras = 1300; 
 $precio_musculosas_h = 1150;
 $precio_shorts = 990;
?>

<h3><?php echo "<font color=\"blue\">$texto</font>"; ?> </h3>
<ul>
 <li> Remeras: $ <?php echo $precio_remeras; ?> </li>
 <li> Musculosas: $ <?php echo $precio_musculosas_h; ?> </li>
 <li> Shorts: $ <?php echo $precio_shorts; ?> </li>
</ul>
</section> 

<section class="mujeres">
<?php 
 $texto= 'Mujeres'; 
 $precio_calzas = 1350; 
 $precio_tops = 890;
 $precio_musculosas_m = 1150;
?>
<h3><?php echo "<font color=\"red\">$texto</font>" ; ?> </h3>
<ul>
 <li> Calzas: $ <?php echo $precio_calzas; ?> </li>
 <li> Tops: $ <?php echo $precio_tops; ?> </li>
 <li> Musculosas: $ <?php echo $precio_musculosas_m; ?> </li>
</ul>
</section> 
    
<?php
$precio_total = $precio_calzas + $precio_tops; 
$precio_total = $precio_musculosas_m + $precio_shorts;  

?>

    <h2> Promociones </h2>
    <ul>
            <li> Calza + Top: $ <?php echo $precio_total;?> </li>
            <li> Musculosa hombre + Short: $ <?php echo $precio_total; ?> </li>
            </ul>
        
<h2>Ingresos de temporada</h2>
<?php
define('ROPA', array ('bikini ', 'bañador ', 'trikini ', 'zunga ')); 
echo ROPA [1];

?>
<br>
<br>
<?php echo 'En remeras si la compra superan las 10 prendas'?>
<br>
<br>
<?php echo 'El precio unitario con este descuento te queda en pesos ', ($precio_remeras -= ($precio_remeras/5))
?>
<br>
<br>
<?php echo "DESCUENTO ESPECIAL PARA CLIENTES QUE PAGUEN EN EFECTIVO"
?>
<br>
<?php echo 'Se suma tu promo y queda en pesos ', ($precio_remeras-=($precio_remeras/10)) ;
?>
</h4> 

</body>
</html>