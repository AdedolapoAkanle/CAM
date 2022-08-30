<?php 
require('../../../Form/Model/Database/database.php');
require('../../../Form/Controller/Classes/parentRegister.php');
require('../../Controller/CommonFunction/function.php');

$parent = new ParentRegister();
$parent->processParent($_POST['surname'],$_POST['first_name'], $_POST['email'],$_POST['password']);
