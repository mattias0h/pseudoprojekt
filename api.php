<?php

if (!empty($_GET['command']) && $_GET['command'] == 'emailvalidation') {
    if (!empty($_GET['email'])) {
        echo (int)validate_email($_GET['email']);
    } else {
        die('email parameeter puudub');
    }
    exit();
}

function validate_email($email) {
    $exp = "^[a-z\'0-9]+([._-][a-z\'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";
    if (eregi($exp,$email)) {
        if (checkdnsrr(array_pop(explode("@",$email)),"MX")) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

$arr = array(
    array(
        "eesnimi" => "Juka",
        "perenimi" => "Sammal",
        "aadress" => "Kalda tee 43/2"
    ),
    array(
        "eesnimi" => "Juss",
        "perenimi" => "Saan",
        "aadress" => "Kuba 2"
    )
);

echo json_encode($arr);

?>