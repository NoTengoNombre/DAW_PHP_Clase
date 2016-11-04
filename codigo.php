<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $salida = shell_exec("netstat -ab -p tcp");
        $tipo = gettype($salida);
        print "El tipo de valor es : " . $tipo;
        echo "<pre><hr> $salida </pre>";
        ?>
    </body>
</html>
