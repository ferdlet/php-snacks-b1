<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$partite = [
    [
        "squadraCasa" => "Olimpia Milano",
        "puntiSquadraCasa" => "55",
        "squadraOspite" => "Varese",
        "puntiSquadraOspite" => "60",
    ],
    [
        "squadraCasa" => "Rayer Venezia",
        "puntiSquadraCasa" => "75",
        "squadraOspite" => "Virtus Bologna",
        "puntiSquadraOspite" => "63",
    ],
    [
        "squadraCasa" => "Reggiana",
        "puntiSquadraCasa" => "45",
        "squadraOspite" => "JuveCaserta",
        "puntiSquadraOspite" => "85",
    ],
    [
        "squadraCasa" => "Trieste",
        "puntiSquadraCasa" => "90",
        "squadraOspite" => "Dinamo Sassari",
        "puntiSquadraOspite" => "80",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <div>
        <?php for ($i = 0; $i < count($partite); $i++) { ?>
            <div style="margin-bottom:15px;">
                <h2>Partita <?php echo $i + 1; ?></h2>
                <?php 
                    echo $partite[$i]["squadraCasa"] . ' - ' . $partite[$i]["squadraOspite"] . ' | ' . $partite[$i]["puntiSquadraCasa"] . '-' . $partite[$i]["puntiSquadraOspite"];
                ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>