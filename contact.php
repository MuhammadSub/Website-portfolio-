<?php
//variable declare
$name=$_REQUEST['Name'];
$email=$_REQUEST['Email'];
$subject=$_REQUEST['Subject'];
$message=$_REQUEST['Message'];
//Checking
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
  // code...
  echo "Please Fill all the entities";
}
else {
  // code...
  mail("muhammadsubhan.contact@gmail.com","alirazaportfolio Message", $message ,"from:$name<$email<$subject>");
  header('location: ../index.html');
}
?>
