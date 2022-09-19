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

// if (!isset($_SESSION['id'])) {
// Fun::redirect("../Login/login.php", "err", "Suspicious Activities!");
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/child.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
                <!-- <div class="main-form"> -->


                <!-- <div class="left_form"> -->

                <!-- <div id="" class="input-field">
                            <label class="label">Parent</label> -->

                <?php
                // $db = new Database;

                // Fun::dynamicDropdown("parent_id", "parent_register", "full_name", "Parent", "", "id", "input");

                ?>
                <!-- </div> -->


                <!-- <div class="input-field">
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
                        </div> -->

                <!-- </div> -->
                <!-- <div class="right_form">
                        <div class="input-field">
                            <label class="label">Full Name</label>
                            <input class="input" type="name" name="full_name">
                        </div>


                        <div class="input-field">
                            <label class="label">Address</label>
                            <input class="input" type="address" name="address">
                        </div>

                    </div> -->
                <div class="main">y
                    <div class="left">
                        <label for="Parent" class="label">Parent</label>4
                        <input type="text" class="input">
                        <label for="Full Name" class="label">Full Name</label>
                        <input type="text" class="input">
                    </div>
                    <div class="right">
                        <label for="" class="label">Date Of Birth</label>
                        <input type="date" class="input">
                        <label for="Address">Address</label>
                        <input type="text" class="input">
                    </div>
                </div>

                <!-- </div> -->

                <div class="cta">
                    <button name="save-child" class="save-btn">save</button>
                </div>

            </form>

        </div>

    </div>
    <script>
    // function myFunction() {
    //     document.getElementById("myDropdownMenu").classList.toggle("show");
    // }

    // function filterFunction() {
    //     var input, filter, ul, li, a, i;
    //     input = document.getElementById("myInput");
    //     filter = input.value.toUpperCase();
    //     div = document.getElementById("myDropdownMenu");
    //     a = div.getElementsByTagName("a");
    //     for (i = 0; i < a.length; i++) {
    //         txtValue = a[i].textContent || a[i].innerText;
    //         if (txtValue.toUpperCase().indexOf(filter) > -1) {
    //             a[i].style.display = "";
    //         } else {
    //             a[i].style.display = "none";
    //         }
    //     }
    // }
    </script>
</body>

</html>