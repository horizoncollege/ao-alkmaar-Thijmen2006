<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zelf gekozen woord</title>
</head>

<body>
    <div>
        <h1>Galgje</h1>
    </div>
    <div>
        <h3>Je hebt gekozen om zelf een woord in te voeren</h3>
    </div>
    <div>
        <form method="POST">
            <input type="text" name="woord_galgje" id="woord_galgje" placeholder="Voer een woord in" />
            <button type="submit" name="opslaan" id="start">opslaan</button>
        </form>
    </div>
    <div>
        <h2>
            <?php

            if (isset($_POST["opslaan"])) {
                setcookie('woord', $_POST["woord_galgje"]);
                header("refresh: 0 ");
            }

            if (isset($_COOKIE["woord"])) {
                echo ("Je hebt") . " '" . $_COOKIE["woord"] . "gekozen om mee te spelen!";
            }

            ?>
        </h2>
    </div>
    <div>
        <form>
            <button type="submit" formaction="galgje.php">Begin het spel</button>
        </form>
    </div>

</body>

</html>