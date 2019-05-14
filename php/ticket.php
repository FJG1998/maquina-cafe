<?php
include('datos.php');


    // BUCLE PARA QUE SALGA EL CAMBIO, EL PRODUCTO ESCOGIDO Y LO QUE VALE EN PANTALLA

    // VARIABLES DEFINIDAS

    $dineroIntroducido = $_POST['dinerointroducido'];
    $valorproducto = $productos[$_POST['productos']];

// BUCLE QUE MIRA SI EL DINERO INTRODUCIDO ES MENOR QUE EL PRECIO DEL PRODUCTO
// Y CALCULA EL CAMBIO.

foreach($productos as $llave => $valor){

    if($dineroIntroducido < $valorproducto){

        echo('Dinero Insuficiente!!');
        break;

    }else if($_POST['productos'] == $llave){

         $cambio = $dineroIntroducido - $valor;

            echo('Ha elejido un excelente'. " ".$_POST['productos'] .', no se arrepentirá :)<br>');
            echo('Ha introducido:'." " . $dineroIntroducido.'€<br>');
            echo ('Su cambio es:' . " ".$cambio .'€');
    }
}

echo('<pre>');

print_r($_REQUEST);

echo('</pre>');

echo('<pre>');

print_r($productos);

echo('</pre>');

