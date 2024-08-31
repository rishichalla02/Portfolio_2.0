<?php

$file = $_GET['file'] .".pdf";

header("content-disposition: attachment; filename=" .urlencode($file));

$fl = fopen($file, "r");

while(!feof($fl)){
    echo fread($fl, 8192);
    flush();
}

fclose($fl);

?>