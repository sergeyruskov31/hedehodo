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
    //$result = false;
    $result[0] = '84.240.769,00';
    $result[1] = '5.007.586,00';
    $result[2] = '12.492.345,00';
    $result[3] = '20.150.240,00';
    echo json_encode($result);
}

function crash()
{
    $result = false;
    echo json_encode($result);
}
