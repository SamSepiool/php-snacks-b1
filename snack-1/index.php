<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$matches = [
    [
        "home" => "siena",
        "guest" => "perugia",
        "home_points" => rand(1,100),
        "guest_points" => rand(1,100),
    ],
    [
        "home" => "napoli",
        "guest" => "genova",
        "home_points" => rand(1,100),
        "guest_points" => rand(1,100),
    ],
    [
        "home" => "milano",
        "guest" => "torino",
        "home_points" => rand(1,100),
        "guest_points" => rand(1,100),
    ],
    [
        "home" => "bari",
        "guest" => "pescara",
        "home_points" => rand(1,100),
        "guest_points" => rand(1,100),
    ],
    [
        "home" => "cagliari",
        "guest" => "palermo",
        "home_points" => rand(1,100),
        "guest_points" => rand(1,100),
    ],
    [
        "home" => "firenze",
        "guest" => "pisa",
        "home_points" => rand(1,100),
        "guest_points" => rand(1,100),
    ],
];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        ul{
            display: flex;
            list-style-type: none;
        }
    </style>
    <body>

        <h1></h1>

        <?php for ($i = 0; $i < count($matches); $i++){ ?>
            <ul>
                <li>
                    <?php   echo $matches[$i]['home'] . ' - ' ?>
                </li>
                <li>
                    <?php   echo $matches[$i]['guest'] . ' | ' ?>
                </li>
                <li>
                    <?php   echo $matches[$i]['home_points'] . '-' ?>
                </li>
                <li>
                    <?php   echo $matches[$i]['guest_points']?>
                </li>
            </ul>

        <?php } ?>    
        
    </body>
</html>