<?php
include "base.php";

$mvs=$Mvim->all(['sh'=>1]);
$tmp=[];
foreach ($mvs as $m) array_push($tmp,"img/".$m['name']);
echo implode(",",$tmp);


?>