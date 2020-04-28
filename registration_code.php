<!--
Here, we write code for registration.
-->
<?php
require_once('database.php');
$fname = $lname = $address = $gender = $email = $password = $pwd = '';

// $fname = $_POST['firstname'];
$nameErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $nameErr = "Name is required";
  } else {
    $fname = ($_POST["firstname"]);
  }

}
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO user (firstname,lastname,address, gender,email,password) VALUES ('$fname','$lname','$address','$gender','$email','$password')";
$result = mysqli_query($data, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>
