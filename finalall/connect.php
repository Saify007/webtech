<?php
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $gender = $_POST['gender'];
     $password = $_POST['password'];



/////DAtabase Connectionn

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//$conn = new mysqli('localhost','root','','test');
//if($conn->connect_error){
     // die('Connection Failed ' .$conn->connect_error);

//}
else{
      $stmt = $conn->prepare("insert into registration(fname,lname,email,gender,password)
      value(?, ?, ?, ?, ?)");
      $stmt->bind_param("sssss",$fname, $lname,$email, $gender, $password);
      $stmt->execute();
      echo'Registration Successful';
      $stmt->close();
      $conn->close();

}







?>
