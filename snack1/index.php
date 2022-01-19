<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$partite = [
    [
        "squadraCasa" => [
            "nome" => "Olimpia Milano",
            "punti" => "55",
        ],
        "squadraOspite" => [
            "nome" => "Varese",
            "punti" => "60",
        ]
    ],
    [
        "squadraCasa" => [
            "nome" => "Rayer Venezia",
            "punti" => "75",
        ],
        "squadraOspite" => [
            "nome" => "Virtus Bologna",
            "punti" => "63",
        ]
    ],
    [
        "squadraCasa" => [
            "nome" => "Reggiana",
            "punti" => "45",
        ],
        "squadraOspite" => [
            "nome" => "JuveCaserta",
            "punti" => "85",
        ]
    ],
    [
        "squadraCasa" => [
            "nome" => "Trieste",
            "punti" => "90",
        ],
        "squadraOspite" => [
            "nome" => "Dinamo Sassari",
            "punti" => "80",
        ]
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
                    echo $partite[$i]["squadraCasa"]["nome"] . ' - ' . $partite[$i]["squadraOspite"]["nome"] . ' | ' . $partite[$i]["squadraCasa"]["punti"] . '-' . $partite[$i]["squadraOspite"]["punti"];
                ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>