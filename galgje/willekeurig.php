<?php
session_start();
?>
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="style.css">
<link href="icon.png" rel="icon" type="icon.png">

<head>
    <title>Galgje Willekeurig Woord</title>
</head>

<body>
    <div>
        <h1>Galgje</h1>
    </div>

    <div>
        <h3> Je hebt gekozen voor een willekeurig woord!</h3>
    </div>
    <?php
    $randomwoorden = array(
        "bicycle",
        "appreciate",
        "bamboozled",
        "backpacker",
        "quizmaster",
        "strawberry",
        "victimized",
        "zoologist",
        "hypnotized",
        "oxygen",
        "chimpanzee",
        "blackjack",
        "alchemist",
        "scientist",
        "friendship",
        "major",
        "award",
        "phase",
        "waste",
        "civilian",
        "objectification",
        "jazz",
        "galaxy"
    );
    $kiezen = array_rand($randomwoorden);
    setcookie('woord', $randomwoorden[$kiezen]);
    ?>
    <div>
        <form>
            <button class="startbutton" type="submit" formaction="galgje.php">Start willekeurig</button>
        </form>
    </div>
    <div>
        <img src="image/hangman_dood.png" alt="Galgje">
    </div>

</body>

</html>