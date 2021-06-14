<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet02 Exercice02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet02 Exercice02</h1>
            <p class="col-12 text-info text-center">Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre 
            aléatoire de 1 à 100. Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat.</p>
             </div>
       <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
            <!-- <?php
                // $i = 0;
                // $j = rand(1, 100);
                // echo 'le nombre aléatoire compris entre 0 & 100 est  : <h5 class="m-3 col-12">'. ($j);
                // echo $j;
                // while ($i <= 20) {
                    // echo'Valeur variable i : <h6 class="m-3 text-center">'. ($i). 'le résulat est  : <h6 class="ml-2 text-center">'. ($i*$j);
                //     $i++;
                // }
            ?> -->
            <!-- Correction JP -->
            <?php
                $randNumber = rand(1, 100);
                // initailisation de la variable number directement dans la boucle for + condition + incrémentation
                for($number = 0; $number <= 20; $number++){
                    ?>
                    <p class="m-3 col-12"><?= 'Ma première variable vaut'. ' : '. $number?></p>
                    <p  class="m-3 col-12"><?= 'Ma deuxième variable vaut'. ' : '. $randNumber?></p>
                    <p class="m-3 col-12"><?= 'La multiplication des deux '. ' : '. $number * $randNumber?></p>
                    <?php
                }
            ?>
        </div>
</div>
</body>
</html>