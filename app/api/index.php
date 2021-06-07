<?php

$htmlfils = glob("../../*.html");
$response = [];

    foreach ($htmlfils as $file){
       array_push($response, basename($file));
    }

    echo json_encode($response);

