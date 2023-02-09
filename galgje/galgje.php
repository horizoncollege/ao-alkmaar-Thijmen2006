<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Galgje</title>
</head>

<style>

</style>

<body>

    <h1>Galgje</h1>

    <!-- Galgje the game -->

    <div>
        <?php
        error_reporting(0);
        // De cookies op de website tijd gelimiteerd maken en de woorden van de andere pagina ophalen
        $fouten_aantal = 0;
        if (isset($_POST['button'])) {
            if ($_POST['button'] != 'reset') {
                $laatste_character = $_POST['button'];
                if (isset($_COOKIE['characters'])) {
                    $characters = $_COOKIE['characters'] . ',' . $_POST['button'];
                } else {
                    $characters = $_POST['button'];
                }
                setcookie('characters', $characters, time() + (86400 * 10));
                header("Location: galgje.php");
            } else {
                setcookie("woord", "", time() - 3600);
                setcookie("characters", "", time() - 3600);
                setcookie("fouten", "", time() - 3600);
                header("Location: index.php");
            }
        }
        //  Het woord ontleden, de letters updaten als alles goed is en de letters printen als _
        $woord_karakters = str_split($_COOKIE['woord']);
        $keuze_karakters = explode(",", $_COOKIE["characters"]);
        $win = true;
        foreach ($woord_karakters as $woord_karakter) {
            $keuze_correct = false;
            foreach ($keuze_karakters as $keuze_karakter) {
                if ($woord_karakter === $keuze_karakter) {
                    $keuze_correct = true;
                }
            }
            if ($keuze_correct) {
                echo ($woord_karakter);
            } else {
                echo ('_ ');
                $win = false;
            }
        }
        // Plaatje update bij fout
        foreach ($keuze_karakters as $keuze_karakter) {
            $keuze_correct = false;
            foreach ($woord_karakters as $woord_karakter) {
                if ($woord_karakter === $keuze_karakter) {
                    $keuze_correct = true;
                }
            }

            if (!$keuze_correct) {
                $fouten_aantal++;
            }
        }
        // Laatste plaatje, je hebt verloren
        $verliezen = false;
        if ($fouten_aantal === 9) {
            $verliezen = true;
        }
        // Het eind bericht of je gewonnen of verloren hebt 
        if ($win) {
            echo '<br> <h1 class="Gewonnen">Je hebt gewonnen</h1>';
        }

        if ($verliezen) {
            echo '<br>  <h1 class="Verloren">Je hebt verloren</h1>';
            echo "<br><h3 class='Verloren'> Het woord was " . $_COOKIE['woord'];
        }
        ?>

        <br>
        <br>
        <br>
        <!-- Reset knop -->
        <form action="galgje.php" method="post">
            <button type="submit" name="button" value="reset">reset</button>

            <!-- Knoppen voor de letters -->
            <?php

            $alfabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
            foreach ($alfabet as $value) {
                $display = true;
                foreach ($keuze_karakters as $keuze_karakter) {
                    if ($value === $keuze_karakter) {
                        $display = false;
                    }
                }
                if ($win) {
                    $display = false;
                    setcookie('woord', "");
                    setcookie('karakters', "");
                }
                if ($verliezen) {
                    $display = false;
                    setcookie('woord', "");
                    setcookie('karakters', "");
                }
                if ($display) {
                    echo ('<button type="submit" name="button" value="' . $value . '">' . $value . '</button>');
                } else {
                    echo ('<button type="submit" name="button" value="' . $value . '" disabled>' . $value . '</button>');
                }
            }

            ?>

        </form>

        <h1>Gebruikte letters:</h1>
        <p>
            <?php

            foreach ($keuze_karakters as $keuze_karakter) {
                echo ($keuze_karakter . ' , ');
            }

            ?>
        </p>
    </div>
    <div>
        <!-- De update list van de plaatjes -->
        <?php

        if ($fouten_aantal === 0) {
            echo ('<img id="dood" src="image/hangman_start.png">');
        }
        if ($fouten_aantal === 1) {
            echo ('<img id="dood" src="image/hangman_eerste.png">');
        }
        if ($fouten_aantal === 2) {
            echo ('<img id="dood" src="image/hangman_tweede.png">');
        }
        if ($fouten_aantal === 3) {
            echo ('<img id="dood" src="image/hangman_derde.png">');
        }
        if ($fouten_aantal === 4) {
            echo ('<img id="dood" src="image/hangman_vierde.png">');
        }
        if ($fouten_aantal === 5) {
            echo ('<img id="dood" src="image/hangman_vijfde.png">');
        }
        if ($fouten_aantal === 6) {
            echo ('<img id="dood" src="image/hangman_zesde.png">');
        }
        if ($fouten_aantal === 7) {
            echo ('<img id="dood" src="image/hangman_zevende.png">');
        }
        if ($fouten_aantal === 8) {
            echo ('<img id="dood" src="image/hangman_achtste.png">');
        }
        if ($fouten_aantal === 9) {
            echo ('<img id="dood" src="image/hangman_dood.png">');
        }

        ?>

    </div>

</body>

</html>