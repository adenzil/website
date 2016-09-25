<?php

$data = $_POST["name"];
$a = exec('./scrape '.$data);
echo $a;

?>