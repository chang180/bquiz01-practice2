<?php
include_once "../base.php";

$table=$_POST['table'];
$bottom=$Bottom->find(1);
$bottom['bottom']=$_POST['bottom'];
$Bottom->save($bottom);

to("../admin.php?do=bottom");

?>