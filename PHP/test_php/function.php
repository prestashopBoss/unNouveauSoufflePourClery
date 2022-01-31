<?php
$phrase = 'ceci est une phrase';
$nbr = strlen($phrase);
echo 'Il y a ' . $nbr . ' charactères dans la phrase ' . $phrase;
?>
</br>
<?php
echo 'Nous sommes le ' . date('l, d, F,') . 'semaine N° ' . date('w') . ' Nous sommes le ' . date('z') . 'eme jour de l\'année';

function pourcentage($val1, $val2){
    $result = ($val1 * $val2) / 100;
    return '</br>' . $result . ' %';
}

echo pourcentage(100, 20);