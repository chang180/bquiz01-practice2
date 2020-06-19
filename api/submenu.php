<?php
include_once "../base.php";

$table=$_POST['table'];
$id=$_POST['id'];
$db=new DB($table);

foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
$db->del($id);
    }else{
$data=$db->find($id);
$data["name"]=$_POST['name'][$key];
$data["text"]=$_POST['text'][$key];
$db->save($data);
    }
}

if(!empty($_POST['name2'])){
    foreach($_POST['name2'] as $key=>$name){
        if(!empty($name)){
            $data2['name']=$name;
            $data2['text']=$_POST['text2'][$key];
            $data2['parent']=$_POST['parent'];
            $db->save($data2);
        }
    }
}


to("../admin.php?do=$table");

?>