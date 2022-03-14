<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>switch 01</title>
        <link rel="stylesheet" href="../_css/switch.css"/>
    </hea>
<body>
    <div class="form">
        <form method="get" action="switch01.php">
            Numero: <input type="number" name="num" required><br/>
            <fieldset><legend>Operação</legend>
                <input type="radio" name="oper" id="dobro" value="1" checked/>
                <label for="dobro">Dobro</label>
                <input type="radio" name="oper" id="cubo" value="2"/>
                <label for="cubo">Cubo</label>
                <input type="radio" name="oper" id="raiz" value="3"/>
                <label for="raiz">Raiz Quadrada</label>    
            </fieldset>
            <input type="submit" class="botao" value="Calcular"/>
        </form>    
    </div>        
</body>
</html>