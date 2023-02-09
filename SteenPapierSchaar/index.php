<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rock, Paper, Scissors</title>
</head>

<body>
    <h1>Steen Papier Schaar</h1>
    <div>
        <form method="POST">
            <label for="speler_een">Speler 1</label>
            <select name="speler_een" id="speler_een">
                <option value="steen">Steen</option>
                <option value="papier">Papier</option>
                <option value="schaar">Schaar</option>
                <input type="submit" name="submit" value="Selecteer">
            </select>
        </form>
    </div>
    <div>
        <form method="POST">
            <label for="speler_twee">Speler 2</label>
            <select name="speler_twee" id="speler_twee">
                <option value="steen">Steen</option>
                <option value="papier">Papier</option>
                <option value="schaar">Schaar</option>
                <input type="submit" name="submit" value="Selecteer">
            </select>
        </form>
    </div>

</body>

</html>