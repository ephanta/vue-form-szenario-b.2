<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
include '../config/database.php';
include '../objects/form_model.php';
include '../objects/form.php';
$database = new Database();
$db = $database->getConnection();
$var = new FormModel();
$form = new Form($db, $var);
$obj = json_decode(file_get_contents('php://input'));
if(isset($obj)){
    $data = (array) $obj;
    $form->prepareData($data);
    $form->create();
}
?>
