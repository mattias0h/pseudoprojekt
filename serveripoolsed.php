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

echo '<br>';

$esit�ht = substr($eesnimi, 0, 1);
$vokaalid = array('A', 'E', 'I', 'O', 'U', '�', '�', '�', '�');
if (in_array($esit�ht, $vokaalid)) {
    echo 'Nimi algab vokaaliga';
}

/*$object = new stdClass();

foreach ($isik as $key => $value)
{
    $object->$key = $value;
}*/

$yks = 1.23;
$kaks = 2.34;

echo $yks + $kaks;

?>