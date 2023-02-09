<!DOCTYPE html>
<html>

<head>
    <title>Steen, Papier, Schaar!</title>
</head>

<body>
    <h1>Steen Papier Schaar</h1>
    <h2>Speler 1</h2>

    <?php

    error_reporting(0);

    // hier maken we de cookies aan die op deze pagina worden gebruikt
    if (isset($_SERVER["HTTP_COOKIE"])) {
        $cookies === explode(";", $_SERVER["HTTP_COOKIE"]);
        foreach ($cookies as $cookie) {
            $parts === explode("=", $cookie);
            $name = trim($parts[0]);
            setcookie($name, "", time() - 1000);
            setcookie($name, "", time() - 1000, "/");
        }
    }
    $dis = "";
    if (isset($_GET["submit"])) {
        $dis = "display: none;";
    }
    // Keuze eerste speler
    echo "<form method='get' style='" . $dis
        . "'>
        <select name='drop'>
        <option>Steen</option>
        <option>Papier</option
        ><option>Schaar</option>
        </select>
        <input type='submit' value='submit' name='submit'>
        </form>";
    if (isset($_GET["submit"])) {
        $p1c = $_GET["drop"];
    }
    ?>
    <h2>Speler 2</h2>
    <?php
    $dis = "";
    if (!isset($_GET["submit"]) || !isset($p1c)) {
        $dis = "display: none;";
    }
    // Keuze tweede speler
    echo "<form method='get' action='game_handler.php' style='" . $dis
        . "'><input name='p1c' type='hidden' value=" . $p1c . "><select name='p2c'>
        <option>Steen</option>
        <option>Papier</option>
        <option>Schaar</option>
        </select>
        <input type='submit' value='submit' name='submit'>";
    echo "</form>";
    ?>

</body>

</html>