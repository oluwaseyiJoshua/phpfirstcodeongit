<!DOCTYPE html>
<html>
<body>
<?php 

if(isset($_POST['submit'])) ;
$firstName = $_POST['first'];
  "First Name: ". $firstName. "<br/>";
$lastName = $_POST['last'];
  "Last Name: ". $lastName. "<br/>";
$dob = $_POST['dob'];
  "Date of birth: ". $dob. "<br/>";
$email = $_POST['email'];
  "email: ". $email. "<br/>";
$password = $_POST['pw'];
  "password: ". $password. "<br/>";

echo "<h3>Welcome $firstName,</h3>
Registration Successful!";


$array_data = array(
    "First Name" => $firstName,
    "Last Name" => $lastName,
    "Date of birth" => $dob,
    "email" => $email,
    "password" => $password
     
);


file_put_contents('files/'. $array_data['First Name'] .".txt" , $array_data);


?>
</body>
</html>