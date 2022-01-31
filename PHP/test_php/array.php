<?php
$prenom[0] = 'T1 - Mathieu';
$prenom[1] = 'T1 - Marie';
$prenom[2] = 'T1 - Robert';

$prenom = array('T2 - Voiture', 'T2 - Vélo', 'T2 - Moto');
$personne = array('Nom' => 'Malezieux,', 'Prenom' => 'James,', 'Age' => 43);

print_r($prenom);
print_r($personne);
?>
</br>
<?php
    foreach ($personne as $presonnes => $detail) {
        echo $presonnes . ' => ' . $detail .'</br>';
    }
    ?>