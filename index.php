<?php

$service_name = @$_POST['service'];
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: *');
if ($service_name != '') {
    if (function_exists($service_name)) {
        $service_name();
    } else
        echo false;
}

function money()
{
    $result = false;
    //$result = '3.300.000,00';
    echo json_encode($result);
}

function crash()
{
    $result = true;
    echo json_encode($result);
}
