<!doctype html>
<<html>
    <head>
        <link rel="stylesheet" href="../_css/switch_02.css"/>
        <title>switch 02 PHP</title>
        <<meta charset="UTF-8">
    </head>
    <body>
        <div>
            <?php
            $std = $_GET["std"];
            switch ($std) {
                case "Minas Gerais":
                case "Espirito santo":
                case "São Paulo":
                case "Rio de Janeiro":
                    $std = "Região Sudeste";
                    break;
                case "Mato Grosso":
                case "Mato Grosso do Sul":
                case "Goiás":
                case "Distrito Federal":
                    $std = "Região Centro-Oeste";
                    break;
                case "Acre":
                case "Amazonas":
                case "Amapá":
                case "Pará":
                case "Rondônia":
                case "Roraima":
                case "Tocantins":    
                    $std = "Região Norte";
                    break;
                case "Bahia":        
                case "Piauí":        
                case "Maranhão":        
                case "Ceará":        
                case "Sergipe":        
                case "Alagoas":        
                case "Pernambuco":        
                case "Paraíba":        
                case "Rio Grande do Norte":        
                    $std = "Região Nordeste";
                    break;
                case "Paraná":
                case "Santa Catarina":
                case "Rio Grande do Sul":    
                    $std = "Região Sul";
                    break;
                default:
                    $std = "ERRO";
                    break;
            }
            
            echo "Você mora na <span style='color: red; font-weight: bold;'>$std</span>";
            ?>
            <br><a class="botao" href="switch_02.html">Voltar</a>        
        </div>
        
    </body>
</html>
