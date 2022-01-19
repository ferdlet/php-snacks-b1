<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$nome = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <div>
        <?php if (isset($_GET["name"]) && isset($_GET["mail"]) && isset($_GET["age"])) {

            if (strlen($nome) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
                echo "<h2 style='color: green'>Accesso riuscito</h2>";
            } else {
                echo "<h2 style='color: red'>Accesso negato</h2>";
            }
        } else {
            echo "<h2 style='color: red'>Accesso negato</h2>";
        }
        ?>

    </div>
</body>

</html>