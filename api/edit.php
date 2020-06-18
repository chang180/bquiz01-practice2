<?php
include_once "../base.php";

$table = $_POST['table'];
$db = new DB($table);
$data=[];
// var_dump($_POST['text']);
// var_dump($_POST['sh']);
// var_dump($_POST['del']);
foreach ($_POST['id'] as $key => $value) {
    // echo "key=".$key."<br>value=".$value."<hr>";
    if (!empty($_POST['del']) && in_array($value, $_POST['del'])) {
        $db->del($value);
    } else {
        $data = $db->find($value);
        switch ($table) {
            case 'title':
                $data['text'] = $_POST['text'][$key];
                $data['sh'] = (in_array($value,$_POST['sh'])); //全都統一起來，就可以直接用拷貝的
                // $data['sh'] = ($value==$_POST['sh']);
                break;
            case 'admin':
                $data['acc'] = $_POST['acc'][$key];
                $data['pw'] = $_POST['pw'][$key];
                break;
            case 'menu':
                $data['name'] = $_POST['name'][$key];
                $data['text'] = $_POST['text'][$key];
                $data['sh'] = in_array($value,$_POST['sh']);
                break;
            default:
                $data['text'] = $_POST['text'][$key]??'';
                $data['sh'] =in_array($value,$_POST['sh']);
                break;
        }
        $db->save($data);
    }
}






to("../admin.php?do=$table");
?>
