<?php

use function PHPSTORM_META\registerArgumentsSet;

require('../../../Form/Model/Database/database.php');
require("../../Controller/Classes/User/user.php");
require('../../../Form/Controller/Classes/parentRegister.php');
require('../../Controller/CommonFunction/function.php');


// if (isset($_POST['signup'])) {
//     $signup = new Signup();
//     $signup->processUser($_POST['name'], $_POST['email'], $_POST['password']);
// }


if (isset($_POST['signup'])) {
    $user = new User();

    $user->processUser($_POST['name'], $_POST['email'],  $_POST['password']);
    // Fun::redirect("Form/View/User/signup.php", "success", "Saved successfully!");
    // exit;
}