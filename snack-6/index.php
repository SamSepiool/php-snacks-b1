<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
  $db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .teachers{
                background-color:gray;
            }
            .pm{
                background-color:green
            }

        </style>
    </head>

    <body>

    <ul class='teachers'>
        <?php foreach($db['teachers'] as $element): ?>

            <li>
                <h3><?= "{$element['name']} {$element['lastname']}" ?> </h3> 
            </li>

        <?php endforeach; ?>    
    </ul>
    <ul class='pm'>
        <?php foreach($db['pm'] as $element): ?>

            <li>
                <h3><?= "{$element['name']} {$element['lastname']}" ?> </h3> 
            </li>

        <?php endforeach; ?>    
    </ul>
        


        
    </body>
</html>