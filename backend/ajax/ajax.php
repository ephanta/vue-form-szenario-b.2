<?php
include '../config/database.php';
include '../objects/form_model.php';
include '../objects/form.php';
$database = new Database();
$db = $database->getConnection();
$var = new FormModel();
$form = new Form($db, $var);
if(isset($_POST['ajaxHandler'])){
    switch($_POST['ajaxHandler']){
        case 'save':
            $data = array();
            parse_str($_POST['data'], $data);
            $form->prepareData($data);
            $form->create();
        break;
    }
}
?>
