<?php
include_once "../base.php";

$table=$_POST['table'];
$id=$_POST['id'];
$db=new DB($table);

// var_dump($db);

if(!empty($_FILES['name']['tmp_name'])){
    $data=$db->find($id);
    // var_dump($_FILES);
    $data['name']=$_FILES['name']['name'];
    $data['id']=$_POST['id'];
    move_uploaded_file($_FILES['name']['tmp_name'],"../img/".$data['name']);
    $db->save($data);
}
to("../admin.php?do=$table");

?>