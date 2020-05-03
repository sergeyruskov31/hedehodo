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
    $result[0] = '287.458.769,00';
    $result[1] = '45.007.586,00';
    $result[2] = '12.492.345,00';
    $result[3] = '35.789.456,00';
    echo json_encode($result);
}

function crash()
{
    $result = false;
    echo json_encode($result);
}
