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
    //$result = '3.378.000,23';
    echo json_encode($result);
}

function crash()
{
    $result = false;
    echo json_encode($result);
}
