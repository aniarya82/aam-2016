<?php
session_start();
if ($_SESSION["email"] != "") {
  header('Location: ./login-complete.php');
  exit();
}
include 'connection.php';

$email = $_POST["email"];
/*$q="SELECT password FROM users WHERE email=$email";
$password = $connection->query($q);
 $password = hash('sha256', $password);

echo "Email ID $email <br>";
echo "Password after hash: $password <br>";
*/


$sql = "SELECT email, password FROM users";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
  // output num rows
  while ($row = $result->fetch_assoc()) {
    // echo "email: " . $row["email"]. " - password: " . $row["password"]."<br>";
    if ($email == $row["email"]) {
      //if ($password == $row["password"]) {
        $_SESSION["email"] = $email;
        $connection->close();
        header('Location: ./login-complete.php');
        exit;
      /*
      else {
        header('Location: ./signin.php?err=pass');
      }*/
    } else {
      header('Location: ./signin.php?err=email');
    }
  }
} else {
  $connection->close();
  header('Location: ./signup.php?alert=Please register before logging in.');
  exit;
}
?>
