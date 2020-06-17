<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
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
  $username = $_POST['username'];
  #$username = cleanInput($db, $username);
  $password = $_POST['password'];
  #$password = cleanInput($db, $password);


  $query = "SELECT * FROM users WHERE username='$username' AND  password='" . md5($password). "'";
  $result = pg_query($db,$query);

  $rows = pg_num_rows($result);


  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: dashboard.php");
  }else{
    echo "
    <div class='notification is-link'>
    <strong>Incorrect Credentials</strong>
    </div>";
    
  }

}

?>

  <section class="section">
    <div class="container">
      <h2 class="title">Login</h2>
      <form class="form" method="POST" name="login">
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
          <button class="button is-link">Login</button>
        </div>
      </div>
</form>
    </div>
  </section>
</body>

</html>