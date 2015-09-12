<?php

$eesnimi = 'Mattias ';
$perenimi = 'Hint ';
$vanus= 25;
$eesnimi_algab_vokaaliga = False;

echo $eesnimi;

echo $perenimi;

echo '(' . $vanus . ')';

$isik = array(
    'eesnimi' => 'Mattias ',
    'perenimi' => 'Hint ',
    'vanus' => 25,
);

echo '<br>';

echo $isik['eesnimi'] . $isik['perenimi'] . '(' . $isik['vanus'] . ')';

?>