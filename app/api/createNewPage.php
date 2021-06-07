<?php
$_POST = json_decode( file_get_contents("php://input"),true);
$NewFile = "../../". $_POST["name"] . ".html";

if (file_exists($NewFile)){
    header("HTTP/1.0 400 Bad Request");
}
else{
    fopen($NewFile, "w");
}