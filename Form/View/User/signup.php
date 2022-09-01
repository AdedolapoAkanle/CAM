<?php
require("../../Model/Backend/backend.php");


if (isset($_GET['err'])) {
    $msg =  $_GET['err'];
    $class = 'error_msg';
} elseif (isset($_GET['succ'])) {
    $msg =  $_GET['succ'];
    $class = 'success_msg';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Style/signup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" integrity="sha512-1hsteeq9xTM5CX6NsXiJu3Y/g+tj+IIwtZMtTisemEv3hx+S9ngaW4nryrNcPM4xGzINcKbwUJtojslX2KG+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet" />


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">



    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="Container">
        <div class="box">
            <form method='post' action="../../Model/Backend/backend.php">
                <div class="header">

                    <h1>Register</h1>
                    <p>Access to our dashboard</p>
                </div>
                <span class="<?php echo $class ?>">

                    <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                    ?>

                </span>

                <div class="main-form">

                    <div class="input-field">
                        <label class="label">Name</label>
                        <input type="text" placeholder="Enter name" name="name" />
                    </div>
                    <div class="input-field">
                        <label class="label">Email</label>
                        <input type="email" placeholder="Enter email address" name="email" />
                    </div>
                    <div class="input-field">
                        <label class="label">Password</label>
                        <input type="password" placeholder="Enter password" name="password" />
                    </div>
                </div>
                <div class="cta">
                    <button name="signup" class="register_btn">Register</button>
                    <p class="register">
                        Already have account?
                        <a href="../User/signin.php" class="login-link">Sign in</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="image-side">
            <img src="../../img/kids.jpg" alt="kid praying" />
        </div>
    </div>
    <script src="./Register.js"></script>
</body>

</html>