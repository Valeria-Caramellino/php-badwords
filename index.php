<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principale</title>
    <style>

        body{
            background-color: black;
            color: white;
            text-align: center;
        }
        h2{
            color: red;
        }
        div{
            margin: 3rem;
        }

    </style>
</head>
<body>

    <?php
    //variabili

    $parolaChange = $_GET ["change"];
    $Ptext = $_GET["text"];


    ?>

    <main>
        <div>
           <h2>Parola scelta dall'utente</h2>
            <p>
                <?php echo $_GET["change"] ?>
            </p> 
        </div>
        
        <div>
            <h2>Testo scelto dall'utente</h2>
            <p>
                <?php
                    echo ucfirst($Ptext) . ' ,la sua lunghezza è '. strlen($Ptext). ' ,caratteri!';
                ?> 
            </p>
        </div>

        <div>

            <h2>
                Questa è la frase conclusiva
            </h2>
           
            <p>

                <?php
                    $FraseCambiata = str_ireplace($parolaChange, '***', $Ptext);
                    echo ucfirst($FraseCambiata). ' ,la sua lunghezza è '. strlen($FraseCambiata). ' ,caratteri!';
                  
                ?>

            </p>
        </div>
       

    </main>
    
</body>
</html>