<?php
$NewFile = "../../". $_POST["name"] . ".html";

if (file_exists($NewFile)){
    header("HTTP/1.0 400 Bad Request");
}
else{
    fopen($NewFile, "w");
}