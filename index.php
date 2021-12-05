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
    require "MasterMind.php";
    session_start();
    if(!isset($_SESSION["sessione"])){
     //rosso = 1, giallo = 2, verde = 3, celeste = 4
    $_SESSION["soluzione"] = new MasterMind();
    }else{
        $sequenza = array($_POST[0], $_POST[1], $_POST[2], $_POST[3] );
       if($_SESSION["soluzione"]:: winControl($sequenza)){
            echo "<h1>Hai vinto, ci hai impiegato $_SESSION[soluzione]::$turno</h1>";
       }else{

       }
    }
    
    ?>
        </form>
    </table>
</body>
</html>