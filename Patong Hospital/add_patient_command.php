<?php 

if(isset($_POST['submit-patient'])) {
    add();
}

function add(){
$conn = new mysqli('localhost', 'admin', 'password', 'patong_hospital');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  
// echo "<script> alert(\"$_POST[name]\")</script>";
//   echo "<script> alert(\"$_POST[address]\")</script>";
//   echo "<script> alert(\"$_POST[condition]\")</script>";
//   echo "<script> alert(\"$_POST[medHistory]\")</script>";
//   echo "<script> alert(\"$_POST[date]\")</script>";
//   echo "<script> alert(\"$_POST[remarks]\")</script>";

if ($_POST['name'] != '') {


  $sql = "INSERT INTO `patong_hospital`.`patients_data`(`name`, `address`, `condition`, `medicationHistory`,
  `dateAdmitted`, `remarks`) 
  VALUES(\"$_POST[name]\", \"$_POST[address]\", \"$_POST[condition]\", \"$_POST[medHistory]\", \"$_POST[date]\",
  \"$_POST[remarks]\");";

//   echo($sql);
  $result = $conn->query($sql);
  $conn->close();

//   echo"<script>alert('New patient added')</script>";
//   header("Location: home.php");

  echo "<script>alert('New patient added'); location = 'home.php';</script>";
//  echo "<script>setTimeout(location.href = 'home.php';,1500);</script>";
  
}
}




?>