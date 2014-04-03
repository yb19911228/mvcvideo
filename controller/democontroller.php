<?php
class democontroller
{
function index()
{
$data['title']='First Title'; 
$data['list']=array('A','B','C','D'); 
require('/model/model.php'); 
$model =new model();
$model -> DBcon();
}

}

//require('../model/model_login.php');
//$model= new	login();
//$model->checkpsw();
?>
