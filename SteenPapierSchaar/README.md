Als je index.php opent dan moet je een keuze maken tussen "speler vs speler" en "speler vs computer".

Als je op "speler vs speler" klikt dan word je doorgestuurd naar game2.php, daar speel je het spel.
Eerst moet Speler 1 een keuze maken, zodra hij/zij op "submit" klikt dan kan diegene niet meer zijn keuze veranderen en zien.
Dan moet Speler 2 kiezen. Voor hem/haar geldt hetzelfde.
Als beide spelers een keuze hebben gemaakt dan wordt de uitslag onthuld en de keuze van beide spelers wordt getoond.

Als je op "speler vs computer" klikt dan word je doorgestuurd naar game.php, daar speel je het spel.
Je moet dan op "start spel" klikken.
Als je dat hebt gedaan dan start het spel.
Je moet dan een keuze maken tussen één van de opties.
Als je dat hebt gedaan dan krijg je te zien of je hebt gewonnen of verloren.
Je krijgt ook de keuze te zien die de computer heeft genomen.


index.php
Dit is het document waar je start. Het bevat maar 2 linkjes naar de spellen.


game.php
Dit is het document waar je het spel "speler vs computer" speelt.
Hier zijn alle opties uitgewerkt voor de speler, ook de computer zijn keuze wordt gemaakt in dit document.
Er wordt ook een score bijgehouden in dit document.
Er is ook een knop "stop met spelen" als je daar op klikt ga je weer terug naar index.php en kan je het spel weer opnieuw starten.


game2.php
Dit is het document waar je het spel "speler vs speler" speelt.
Hier zijn alle opties uitgwerkt voor beide spelers.
HIer moeten de spelers dus ook hun keuze maken tijdens het spelen.
Als beide spelers hun keuze hebben ingevuld, worden ze doorgestuurd naar game_handler.php.


game_handler.php
Dit is het document waar je de uitslag van het spel "speler vs speler" krijgt te zien.
In dit document wordt ook de winnaar bepaalt.
Alle mogelijke opties zijn uitgewerkt in dit document.
Hier krijg je te zien wat beide spelers hebben ingevuld en wordt de uitslag weergegeven.
Je kan ook met de knop "reset" nog een ronde spelen.
Je hebt ook de knop "Stop met spelen" dan ga je weer terug naar index.php.