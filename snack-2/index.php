<!-- Snack 2
Passare come parametri GET name, mail e age e verificare -cercando i metodi che non conosciamo nella documentazione- che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php 

$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];




if ( empty($name) || empty($age) || empty($email) ){
    echo 'inserisci i dati per accedere';
} elseif (strlen($name) < 4) { 
    echo 'ACCESSO NEGATO, nome deve contenere almeno 4 caratteri';
} elseif (!is_numeric($age)) {
    echo 'ACCESSO NEGATO, età deve essere un numero';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'ACCESSO NEGATO, sintassi email non corretta';
} else{
    echo 'ACCESSO RIUSCITO';
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <form action="">
            <label for="name">
                <input type="text" name="name" id="" placeholder='nome'>
            </label>
            <label for="age">
                <input type="number" name="age" id="" placeholder='età'>
            </label>
            <label for="email">
                <input type="email" name="email" id="" placeholder='email'>
            </label>
            <input type="submit" value="Accedi">
        </form>
        
    </body>
</html>