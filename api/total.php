<?php
include_once "../base.php";

$table=$_POST['table'];
$total=$Total->find(1);
$total['total']=$_POST['total'];
// var_dump($total);
$Total->save($total);

to("../admin.php?do=total");

?>