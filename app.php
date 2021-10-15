<?php
    header("Content-Type: application/json");
    $_NOMBRE = (string) null;
    $NOMBRE  = (string) "Juan Carlos";

    //Operador de asignacion
    $_NOMBRE = (string)$NOMBRE;
     var_dump($_NOMBRE);
     var_dump($NOMBRE);

    //Operador de concatenacion
     $MEDIDA = (string)"UNA PULGADA A CM = ";
     $NUMERO = (float)12.7;

     $RESULTADO =(string) $MEDIDA.$NUMERO;

    $PLANTILLA = <<<HTML
        <P>
            $MEDIDA $NUMERO
            <b> ${!${''}= $RESULTADO}</b>

        </P>
    HTML;
        var_dump($PLANTILLA);

    
        $LETRA = (string) "A";
        $NUMERO = (integer) 10;
        $PORCENTAJE = (string) "%";
    
        $LETRA .= $NUMERO.$PORCENTAJE;
    
        var_dump($LETRA);
        var_dump($NUMERO);
        var_dump($PORCENTAJE);
        

    

          






?>