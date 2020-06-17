<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>

    <nav class="navbar is-transparent is-link">

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="index.php">
                    Home
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">

                        <p class="control">
                            <a class="button is-white" href="index.php">
                                <span>Login</span>
                            </a>
                        </p>


                        <p class="control">
                            <a class="button is-white" href="signup.php">
                                <span>Signup</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<?php

require('db.php');
session_start();
if(isset($_POST['username'])){

    $name     = $_POST['name'];
    #$name = cleanInput($db, $name);
    $email     = $_POST['email'];
    #$email = cleanInput($db, $email);
    $username = $_POST['username'];
    #$username = cleanInput($db, $username);
    $password = md5($_POST['password']);
    #$password = cleanInput($db, $password);


    $query    = "INSERT INTO users (username,password,name,email) VALUES ('$username', '$password', '$name', '$email' )";


    $result = pg_query($db,$query) or die(pg_last_error());

    

    echo $result;

    if($result){
        echo  "<div class='notification is-link'>
        <strong>You have registered sucessfully, now login to access your dashboard</strong>
        </div>";
    }
    else{
        echo  "<div class='notification is-warning'>
        <strong>Some fields are missing!</strong>
        </div>";
    }
}

?>

    <section class="section">
        <div class="container">
            <h2 class="title">Signup</h2>
            <form class="form" method="POST" name="signup" action="">
            <div class="field">
                <label class="label">Full Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Enter your name" name="name">
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email" placeholder="Enter your name" name="email">
                </div>
            </div>

            <div class="field">
                <label class="label">Username</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Enter your username" name="username">
                </div>
            </div>

            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input class="input" type="password" placeholder="Enter your password" name="password">
                </div>
            </div>


            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link submit">Signup</button>
                </div>
            </div>
</form>
        </div>
    </section>
</body>

</html>