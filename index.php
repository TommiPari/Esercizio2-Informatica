<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tasso d'interesse</h1>
    <?php
        $capitale  = 20000;
        $tasso = 0.10; // percentuale
        $giorni = 30;
        $interesse = number_format(($capitale*$tasso*$giorni)/36500, 2);
        echo "<h4>Capitale: $capitale</h4>";
        echo "<h4>Tasso: ". $tasso*100 ."%</h4>";
        echo "<h4>Giorni: $giorni</h4>";
        echo "<h2 style='color:green'>L'interesse calcolato è di $interesse</h2>";
    ?>
</body>
</html>