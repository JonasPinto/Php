<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primeiro exemplo PHP</title>
        <style>
            h2 {
                color:#80a2ff;
                    text-shadow: 1px 1px 1px black;
            }
            h3 {
                tex
                text-align: center;
                color:#cc0000;
            }
        </style>
    </head>
    <body>
        <h1>Testando PHP</h1>
        <?php
        $idade = 3;
        if ($idade > 0) {
    echo "<h3>tudo certo com a idade</h3>";
}

echo "<h2>Olá,<br/> Mundo!</h2>";
        ?>
    </body>
</html>
