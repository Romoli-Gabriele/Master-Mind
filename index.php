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
        <form method="POST" action="index.php">
    <?php
    require "MasterMind.php";
    session_start();
    if(!isset($_SESSION["soluzione"])){
     //rosso = 1, giallo = 2, verde = 3, blu = 4
    $_SESSION["soluzione"] = new MasterMind();
    var_dump($_SESSION["soluzione"]->soluzione);
    }else{
        $sequenza = array($_POST["0"], $_POST["1"], $_POST["2"], $_POST["3"] );
       if($_SESSION["soluzione"]-> winControl($sequenza)){
           die("<h1>Hai vinto, ci hai impiegato $_SESSION[soluzione]::$turno</h1>");
           session_destroy();
       }
       if($_SESSION["soluzione"]->turno>20){
        die("<h1>Hai Perso, hai terminato i 20 turni");
        session_destroy();
       }
    }
    $_SESSION["soluzione"]->requestTable();
    ?>
        </form>
    </table>
    <br>
    <br>
    <table border="2">
        <?php if(isset($_SESSION["soluzione"])){ $_SESSION["soluzione"]->resulTable($sequenza);}?>
    </table>
</body>
</html>