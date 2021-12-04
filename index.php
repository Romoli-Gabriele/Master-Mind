<!DOCTYPE html>
<html>
<head>
    <title>
        Master Mind
    </title>
</head>
<body>
    <h1>Gioco del Master Mind</h1>
    <br>
    <br>
    <table border="2">
        <form method="POST">
    <?php
    require "functions.php";
    session_start();
    if(!isset($_SESSION["soluzione"])){
     //rosso = 1, giallo = 2, verde = 3, celeste = 4
    $_SESSION["soluzione"] = array( random_int(1,4), random_int(1,4),  random_int(1,4),  random_int(1,4));
    $_SESSION["b1"] = 0;
    $_SESSION["b2"] = 0;
    $_SESSION["b3"] = 0;
    $_SESSION["b4"] = 0;
    }else{
         
    }
    requestTable()
    ?>
        </form>
    </table>
</body>
</html>