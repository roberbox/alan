<?php
$jsondate = file_get_contents("alimentos.json");
$json = json_decode($jsondate,true);
?>




<!DOCTYPE html>
<html>

<head>
    <title>Tienda.dev</title>
    <link  rel="stylesheet" href="css/master.css">
</head>

<body>
<header>Tienda.dev</header>

<?php

# definimos el array de valores para el menu y submenus
$menu = array(
    array(
        'titulo' => 'Electronica',
        'enlace' => 'index.php',

    ),
    array(
        'titulo' => 'Muebles',
        'enlace' => 'muebles.php',
        'subcategoria' => array()
    ),


    array(
        'titulo' => 'Salud',
        'enlace' => 'salud.php',
    ),

    array(
        'titulo' => 'Alimentos',
        'enlace' => 'alimentos.php',
    )
);

/**
 * Funcion para mostrar los enlaces
 * Tiene que recibir el array de valores y la clase a asignar que puede ser:
 *  menu o submenu
 */
function mostrarEnlace($menu, $class)
{
    if ($menu['enlace']) {
        echo "<a href='" . $menu['enlace'] . "'>";
    }

    echo "<li class='" . $class . "'>";
    echo $menu['titulo'];
    echo "</li>";

    if ($menu['enlace']) {
        echo "</a>";
    }
}

echo "<nav>";
echo "<ul>";
# recorremos todo el array de valores es lo que muestra el menu


for ($i = 0; $i < count($menu); $i++) {
    mostrarEnlace($menu[$i], "menu");

}

echo "<ul>";
echo "</nav>";
?>



<div class="product_container">

    <?php
    #electronica


    foreach($json['alimentos'] as $key => $value ){
        echo '<div class="product_item" >';
        echo '<img  src="img/papas.jpg  "   >';
        echo '<h3> id:' .$value['id']. '</h3>'  ;
        echo '<p> Name:' .$value['name']. '</p>'  ;
        echo '<p> Price:' .$value['price']. '</p>'  ;
        echo '</div>';

    }


    ?>




</div>





<footer>&copy;alan</footer>



</body>
</html>