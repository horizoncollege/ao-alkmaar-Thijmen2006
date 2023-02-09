<!DOCTYPE html>
<html lang="en">

<head>
    <title>Steen, Papier, Schaar</title>
</head>

<body>
    <h1>Steen, Papier, Schaar</h1>
    <hr>

    <?php
    error_reporting(0);
    if (isset($_SERVER["HTTP_COOKIE"])) {
        $cookies === explode(";", $_SERVER["HTTP_COOKIE"]);
        foreach ($cookies as $cookie) {
            $parts === explode("=", $cookie);
            $name = trim($parts[0]);
            setcookie($name, "", time() - 1000);
            setcookie($name, "", time() - 1000, "/");
        }
    }


    // de eind formule die hier wordt gebruikt is om de juiste foto voor de winnaar te bepalen en de keuzes te onthullen
    if (isset($_GET["p1c"]) || isset($GET["p2c"])) {
    } else {
        header("Location: game2.php");
    }
    $player1 = $_GET["p1c"];
    $player2 = $_GET["p2c"];

    echo "<h1>Speler 1 heeft " . $player1 . " gekozen.</h1>";
    echo "<h1>Speler 2 heeft " . $player2 . " gekozen.</h1>";

    $won = null;

    // Een overzicht van de formule bij welke uitkomst wie wint 
    switch ($player1) {
        case "Steen":
            switch ($player2) {
                case "Steen":
                    $won = 3;
                    break;
                case "Papier":
                    $won = 2;
                    break;
                case "Schaar":
                    $won = 1;
                    break;
                default:
                    echo ("<h1>Er is iets fout gegaan: error 404</h1>");
                    break;
            }
            break;
        case "Papier":
            switch ($player2) {
                case "Steen":
                    $won = 1;
                    break;
                case "Papier":
                    $won = 3;
                    break;
                case "Schaar":
                    $won = 2;
                    break;
                default:
                    echo ("<h1>Er is iets fout gegaan: error 404</h1>");
                    break;
            }
            break;
        case "Schaar":
            switch ($player2) {
                case "Steen":
                    $won = 2;
                    break;
                case "Papier":
                    $won = 1;
                    break;
                case "Schaar":
                    $won = 3;
                    break;
                default:
                    echo ("<h1>Er is iets fout gegaan: error 404</h1>");
                    break;
            }
            break;
        default:
            echo ("<h1>Er is iets fout gegaan: error 404</h1>");
            break;
    }

    // Het eindresultaat waar wordt getoond wie er heeft gewonnen, dit wordt weergeven door tekst en een plaatje
    switch ($won) {
        case 1:
            echo ("<img src='player1win.png' alt='player 1 wins'>");
            break;
        case 2:
            echo ("<img src='player2win.png' alt='player 2 wins'>");
            break;
        case 3:
            echo ("<h1>gelijk spel!</h1>");
            break;

        default:
            echo ("<h1>Er is iets fout gegaan: error 404</h1>");
            break;
    }
    ?>
    <!-- De reset button om de pagina terug te brengen naar zijn begin status -->
    <form method="post" action=game2.php>
        <input type="submit" name="reset" value="Nog een ronde">
    </form>
    <form class="" action="index.php" method="post">
        <input type="submit" name="terug" value="Stop met spelen">
    </form>