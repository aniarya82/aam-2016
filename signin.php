<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Login</title>
  <?php include 'topHead.php'; ?>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
    <h2 align="center">Login</h2>
    <!-- <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      Error!! Email Id not found
    </div> -->
    <?php
    if ($_GET["err"]) {
      $err = $_GET["err"];
      echo "<div class='alert alert-danger alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
      echo "<span aria-hidden='true'>&times;</span>";
      echo "</button>";
      if ($err == "email") {
        echo "Email Id not registed";
      }
      if ($err == "pass") {
        echo "Email Id OR Password didn't match";
      } else {
        echo "";
      }
      echo "</div>";
    }
     ?>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="Email ID">Email ID</label>
        <input class="form-control" type="email" name="email" value="" placeholder="Email ID">
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input class="form-control" type="password" name="password" value="" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block" name="button">LOGIN</button>
    </form>
  </div>
</body>

</html>
