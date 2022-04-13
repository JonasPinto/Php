<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Get url</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>

    <body>
        <div>
            <form method="get" action="dowhile_03.php">
                <label for="tab">Tabuada</label>
                <select type="number" name="tab" required>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<option>$i</option>";
                    }
                    ?>
                </select>
                <input type="submit" value="Ir para Tabuada">            
            </form>
        </div>    
    </body>
</html>
