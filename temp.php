<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cricket_1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $sql= " INSERT INTO player_info(  p_name, DOB, age, address, ph_no,email_id, skill, username, password)
    VALUES ('user','2000-03-28',20,'address',8208050250,'rutwikkarande2@gmail.com','skill','username','password') ";
  
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Navin zhalay";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
