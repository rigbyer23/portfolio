<?php
session_start();
require("../team-activities/dbconnect.php");
 $db = get_db();
$password = $_POST['password'];
$username = $_POST['username'];

$query = $db->prepare('SELECT password FROM ab_member WHERE username = :username;');

$query->bindValue(':username', $username, PDO::PARAM_STR);
$query->execute();

$realPass = $query->fetch(PDO::FETCH_ASSOC);

 $_SESSION["username"] = $username;
 
if (password_verify($password, $realPass['password'])){
    header('location: ./memberListView.php');  
}

else{
    header('location: ./swe-signin.php');
}


?>