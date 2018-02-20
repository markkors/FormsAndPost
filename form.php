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
        .table {display: table;}
        .table-row {display: table-row;}
        .table-cell {
            display: table-cell;
            padding-bottom: 10px;
            padding-right: 10px;
        }
    </style>
</head>
<body>

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
            <div class="table-cell"><input type="submit" name="submit" value="submit"></div>
            <div class="table-cell"></div>
        </div>
    </div>
</form>

</body>
</html>
