<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset = "UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<table border='1'>";
        for ($i = 32; $i < 128; $i++) {
            echo "<tr><td>$i</td><td>" . chr($i) . "</td></tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>