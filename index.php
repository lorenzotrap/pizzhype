<?php
    if(!isset($_COOKIE["conta"]))
        setcookie("conta", 1, time()+86400*7);
    else
    {
        $_COOKIE["conta"]++;
        setcookie("conta", $_COOKIE["conta"], time()+86400*7);
    }
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prova Cookie</title>
</head>
<body>
<?php
    if(isset($_COOKIE["conta"]))
        echo "<h1>Bentornato, hai eseguito l'accesso ".$_COOKIE["conta"]." volte</h1>"; 
    else
        echo "<h1>Benvenuto, conterò i tuoi accessi per una settimana</h1>";    
?>
</body>
</html>