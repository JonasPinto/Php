<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>03 formulário</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    
    <body>
    <div>
        <form method="get" action="03cores.php">
            <label for="itxt">Texto: </label>
            <input type="text" name="t" id="itxt"/><br/>
            <label for="itam">Tamanho<label/>
            <select name="tam" id="itam">
                <option value="8pt" selected>8</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
                <option value="60pt">60</option>
                <option value="80pt">80</option>
                <option value="100pt">100</option>
            </select><br/>
            <label for="icor">Cor: </label>
            <input type="color" name="cor" id="icor"/><br/>
            <input type="submit" value="Gerar"/>
        </form>
    <div/>    
    </body>
</html>
