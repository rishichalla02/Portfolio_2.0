<?php

$file = $_GET['file'] .".pdf";

header("content-disposition: attachment; filename=" .urlencode($file));

$fo = fopen($file, "r");

while(!feof($fo)){
    echo fread($fo, 8192);
    flush();
}

fclose($fo);

?>