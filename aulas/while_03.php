<!doctype html>
<html>
    <head>
        <title>while 03</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    <body>
        <div>
            <form method="get" action="while03.php">
                <label for="ini">Inicio</label>
                <input type="number" name="inicio" id="ini" min="0" max="1000" required/><br>
                <label for="fin">Final</label>
                <input type="number" name="final" id="fin" min="0" max="1000" required><br>
                <label for="op">Incremento</label>
                <select name="opcoes" id="op">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                <input type="submit" value="Calcular"/>
            </form>
        </div>
    </body>
</html>
