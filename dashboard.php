<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<?php
    include("auth.php");
?>

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
              <a class="button is-danger" href="logout.php">
                <span>Logout</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <h2 class="title">Hey <?php echo $_SESSION['username']; ?></h2>
      <div class="notification is-link">
        <strong>You're logged in sucessfully</strong>
      </div>
    </div>
  </section>
</body>

</html>