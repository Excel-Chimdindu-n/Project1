<?php
 include'dbh.php';
?>
<?php 

 $userName = $_POST['name'];
 $userEmail = $_POST['email'];
 $userGender = $_POST['gender'];
 $userTopic = $_POST['subject'];
 $userMessage = $_POST['message'];

//  database connection

// $conn = mysqli_connect($serverName, $userName, $password, $dbName,);

    
$sql = "INSERT INTO `users_complains`( `name`, `email`, `gender`, `subject`, `message`)
 VALUES ('$userName', '$userEmail', '$userGender', '$userTopic', '$userMessage')";

$result = mysqli_query($conn, $sql);


header('Location:../index.html#contact');




?>