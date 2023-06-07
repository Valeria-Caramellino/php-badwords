<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Form</title>
    <style>
        body{
            background-color: black;
          
        }
        h1{
            color: red;
            text-align: center;
            margin: 3rem;
        }
        form{
            background-color: palegreen;
            text-align: center;
            padding: 3rem;
        }
    </style>
</head>
<body>

<main>
    <h1>Inserisci frase e parola da sostituire</h1>

    <form action="index.php" method="GET">
        <input type="text" name="change" placeholder="parola da sostituire">
        <input type="text" name="text" placeholder="scrivi il testo">
        <button type="submit">invia</button>
    </form>
</main>    

</body>
</html>