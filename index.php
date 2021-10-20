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
    <?php
    session_start();
     //rosso = 1, giallo = 2, verde = 3, celeste = 4
    $_SESSION["soluzione"] = array( random_int(1,4), random_int(1,4),  random_int(1,4),  random_int(1,4));
    $_SESSION["$b1"] = 1;
    $_SESSION["$b2"] = 1;
    $_SESSION["$b3"] = 1;
    $_SESSION["$b4"] = 1;
    echo '
        <tr>
            <td>
                <button><img src="$"></button>
            </td>
            <td>
                <button><img src="rosso.gif"></button>
            </td>
            <td>
                <button><img src="rosso.gif"></button>
            </td>
            <td>
                <button><img src="rosso.gif"></button>
            </td>
            <td>
                <button><img src="spunta.gif"></button>
            </td>
        </tr>
    ';
    
    ?>
    </table>
</body>
</html>