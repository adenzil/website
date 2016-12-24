<?php

$data = $_POST["name"];
$a = shell_exec('./scrape '.$data);
echo $a;

?>