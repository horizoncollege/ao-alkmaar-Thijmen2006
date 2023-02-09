<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background-image: url('afbeeldingen/background.jpg'); color: white;">

<div class="intro">
    <div class="bg-primary text-center" style="border-radius: 30px; margin:20px">
        <h1>Application Dashboard</h1>
        <br>
        <p>Hallo, ik ben Thijmen Hekkema en dit is mijn dashboard. Hier kun je naar al mijn projecten gaan die ik heb gemaakt tijdens mijn opleiding.</p>
        <br>
    </div>
</div>
<br>
    
    <div class="container">
        <div class="row">
            <!-- Eerste knop naar project wie ben ik -->
            <div class="col">
                <a href="wie ben ik/" target="_blank"><img class="img-thumbnail" width="200px;" height="50px;" src="afbeeldingen/WieBenIk.png"></a>
                <p>Wie ben ik?</p>
            </div>

            <!-- Tweede knop naar project Politieke partij -->
            <div class="col">
                <a href="PPT/" target="_blank"><img class="img-thumbnail" width="200px;" height="50px;" src="afbeeldingen/logo_PPT.png"></a>
                <p>Mijn politieke partij</p>
            </div>

            <!-- Derde knop naar project galgje -->
            <div class="col">
                <a href="Galgje" target="_blank"><img class="img-thumbnail" width="200px;" height="50px;" src="afbeeldingen/galgje.png"></a>
                <p>Galgje</p>
            </div>
            <div class="col">
                <a href="SteenPapierSchaar/" target="_blank"><img class="img-thumbnail" width="200px;" height="50px;" src="afbeeldingen/SteenPapierSchaar.jpg"></a>
                <p>Steen, Papier, Schaar</p>
            </div>
        </div>
    </div>

    <footer class="bg-primary" style="display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    position: relative;
    bottom: -197px;
    width: 100%;
    max-width: 7000px;
    border-radius: 30px;">
        <ul>
            <p>© copyright all rights reserved</p>
        </ul>
    </footer>


</body>

</html>