<?php
require("../../Model/Database/database.php");
require("../../Controller/Common_Function/function.php");
// require("../../Model/Backend/backend.php");
require("../../Controller/Classes/child_register.php");



if (isset($_GET['err'])) {
    $msg =  $_GET['err'];
    $class = 'error_msg';
} elseif (isset($_GET['succ'])) {
    $msg =  $_GET['succ'];
    $class = 'success_msg';
}

if (!isset($_SESSION['id'])) {
    // Fun::redirect("../Login/login.php", "err", "Suspicious Activities!");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/registerChild.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <img src="../../img/GH_logo.png" class="logo" alt="">
        <ul>
            <li class="nav_link"><a href="#">Report</a></li>
            <li class="nav_link"><a href="../Parent_Register/parent.php">Register parent</a></li>
            <li class="nav_link"><a href="../Child_Register/child.php">Register child</a></li>
            <li class="nav_link"></li>
            <hr class="v-line">
            <button class="logout-btn">
                <img src="../../img/SVG/switch.svg" class="switch-icon" alt="switch-icon" height="30px">
            </button>
        </ul>
    </nav>
    <div class="container">
        <div class="form">
            <form method="post" action="../../Model/Backend/backend.php">
                <div class="header">
                    <h1>Child Registration</h1>
                    <span class="<?php echo $class ?>">

                        <?php
                        if (isset($msg)) {
                            echo $msg;
                        }
                        ?>

                    </span>
                </div>
                <div class="main-form">


                    <div class="left_form">
                        <div class="input-field">
                            <label class="label">Full Name</label>
                            <input class="input" type="name" name="full_name">
                        </div>
                        <div class="input-field">
                            <label class="label">Date Of Birth</label>
                            <input class="input" type="date" name="dob">
                        </div>
                        <div class="input-field-gender">
                            <div class="male-radio-btn">
                                <input class="radio" type="radio" name="gender" value="male">
                                <label class="label">Male</label>
                            </div>
                            <div class="female-radio-btn">
                                <input class="radio" type="radio" name="gender" value="female">
                                <label class="label">Female</label>
                            </div>
                        </div>

                    </div>
                    <div class="right_form">

                        <div class="input-field">
                            <label class="label">Parent Phone Number</label>
                            <!-- <input class="input" type="number" name="phone"> -->
                            <!-- <input type="text" name="phone" class="text-input" /> -->
                            <?php
                            $db = new Database;

                            Fun::dynamicDropdown("parent_id", "parent_register", "full_name", "Parent", "", "id", "input");

                            ?>
                        </div>


                        <div class="input-field">
                            <label class="label">Address</label>
                            <input class="input" type="address" name="address">
                        </div>

                    </div>
                </div>

                <div class="cta">
                    <button name="save-child" class="save-btn">save</button>
                </div>

            </form>

        </div>

    </div>
</body>

</html>