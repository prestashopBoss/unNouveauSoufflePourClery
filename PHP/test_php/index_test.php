<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testouille</title>
</head>
<body>
    <p>Ceci est du html</p>
    <?php
    $age = 43;
    $prix = 12.5;
    $quantite = 2;
    $total = $prix * $quantite;
    echo 'La concaténation en PHP est un point. Age du visiteur = ' . $age . ' ans </br>';
    echo 'Le prix de 2 articles est de '. $prix . ' fois = ' . $quantite . ' = ' . $quantite . '</br>';
    if ($age <= 18){
        echo 'Salut gamin </br>';
        }
    elseif($age == 19){
        echo 'Tu as 19 ans';
        }
    else {
        echo 'Salut viellard </br>';
    }

    $repet = 1;

    while ($repet < 11) {

        echo '<p>Boucle While ' . $repet . ' fois </p>';
        $repet++;
    }

    for ($i=1; $i <11 ; $i++) { 
        echo 'Boucle <div style= "color:red">FOR </div>' . $i . ' fois ';
    }
    $prenom[0] = 'T1 - Mathieu';
    $prenom[1] = 'T1 - Marie';
    $prenom[2] = 'T1 - Robert';

    $prenons = array('T2 - Voiture', 'T2 - Vélo', 'T2 - Moto');
    $personne = array('Nom' => 'Malezieux,', 'Prenom' => 'James,', 'Age' => 43);

    echo '</br><b>' . $prenom[2] . '</b></br>';
    print_r($prenom);
    foreach ($prenons as $prenoms) {
        echo $prenons . '</br>';
    }
    ?>
    </br>
    <?php
    print_r($personne);
   ?>
    <p>
    En version HTML : </br>
    <button>Submit</button>
    L'age du visiteur est de <?php echo $age; ?>
    </p>
    
</body>
</html>

