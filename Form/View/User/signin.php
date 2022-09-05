<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css"
        integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css"
        integrity="sha512-1hsteeq9xTM5CX6NsXiJu3Y/g+tj+IIwtZMtTisemEv3hx+S9ngaW4nryrNcPM4xGzINcKbwUJtojslX2KG+DQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet" />


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

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
            <form action='../../Model/Backend/backend.php' method='post' id="myform">
                <div id="load"></div>
                <div class="header">
                    <h1>Login</h1>
                    <p>Access to our dashboard</p>
                </div>
                <div class="main-form">
                    <div class="input-field">
                        <label for="email" class="label">Email</label>
                        <input type="email" placeholder="Enter email address" id="email" name="email">
                    </div>
                    <div class="input-field">
                        <div class="password_field">
                            <label for="password" class="label">Password</label>
                            <a href="#" class="forgot_password"><i>forgot password?</i></a>
                        </div>

                        <input type="password" placeholder="Password" id="password" name="password">

                    </div>
                </div>
                <div class="cta">
                    <button class="login-btn" id="login-btn" name="login-btn" onclick="">Login</button>
                    <!-- <div class="spinner-border text-primary" id="load"></div> -->
                    <p class="register">Don't have an account yet? <a href="../User/signup.php"
                            class="register_link">Signup</a></p>
                </div>
                <div class="result">

                </div>
            </form>

        </div>
        <div class="image-side">
            <img src="../../img/kids.jpg" alt="kid praying">
        </div>
    </div>
    <script src="login.js"></script>

</body>

</html>