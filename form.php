<?php

/*
 * Zorg dat het formulier wordt verstuurd naar zichzelf
 *
 * Check dan in PHP of je formulier is is verzonden via POST.
 * Indien dan het geval is zet dan onder het formulier de tekst : Welkom [voornaam] [achternaam]
 *
 * Challenge: zorg na de POST dat de voor en achternaam in de textvelden bljven staan!
 *
 */



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulier</title>

    <style>
        header {
            text-align: center;
        }

        main {
            display: flex;
            justify-content: center;
        }

        form {
            border: 1px solid black;
            border-radius: 2px;
            padding: 50px;

        }

        .table {
            display: table;
        }
        .table-row {display: table-row;}
        .table-cell {
            display: table-cell;
            padding-bottom: 10px;
            padding-right: 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>Prijzenfestival</h1>
</header>
<main>
    <form method="post">
        <div class="table">
            <div class="table-row">
                <div class="table-cell">voornaam</div>
                <div class="table-cell"><input type="text" name="first"></div>
            </div>
            <div class="table-row">
                <div class="table-cell">achternaam</div>
                <div class="table-cell"><input type="text" name="last"></div>
            </div>
            <div class="table-row">
                <div class="table-cell">leeftijd</div>
                <div class="table-cell"><input type="number" name="age"></div>
            </div>
            <div class="table-row">
                <div class="table-cell"><input type="submit" name="submit" value="verstuur"></div>
                <div class="table-cell"></div>
            </div>

        </div>

    </form>

</main>
</body>
</html>
