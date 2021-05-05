<?php
  
  $fdusername = $_POST['fdusername'];
  $fdPhoneNumber = $_POST['phno'];
  $feedback = $_POST['feedback'];


$dbhost = "sql201.epizy.com";
$dbuser = "epiz_28540042";
$dbpass = "Zu3u72vy4Vl";
$db=" epiz_28540042_database";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Could not connect");

$Insert = "INSERT INTO `feedback`(`username`,`feedback`, `phno`) VALUES ('$fdusername','$feedback',$fdPhoneNumber)";
if ($conn->query($Insert) === TRUE) {
} else {
  
}
?>