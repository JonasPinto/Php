<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <title>formulário 01</title>
    </head>
    <body>
        <div>
            <form method ="get" action ="02idade.php">
                Nome: <input type="text" name="nome"/><br/>
                Ano de Nascimento: <input type="number" name="ano"/><br/>
                <fieldset><legend>Sexo</legend>
                    <input type="radio" name="sexo" id="masc" value="Homem" checked/>
                    <label for="masc">Masculino</label><br/>
                    <input type="radio" name="sexo" id="fem" value="Mulher"/>
                    <label for="fem">Feminino</label>
                </fieldset><br/>
                <input type="submit"/>
            </form>
        </div>
    </body>
</html>
