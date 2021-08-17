

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
      <link rel="stylesheet" href="css/adminLogin.css" />
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>



<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userName = $passWord = "";
        $userNameErr = $passWordErr = "";

    if (empty($_POST["userName"])) {
        $userNameErr = "UserName required";
    }
    else {
        $userName = validateInput($_POST["userName"]);
    }
    if (empty($_POST["passWord"])) {
         $passWordErr = "PassWord required";
    }
    else {
        $lname = validateInput($_POST["passWord"]);
   }
}
    function validateInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
      ?>
      <div class="container">
        <div class="wrapper">
          <div class="title">
            <span>User LogIn</span>
          </div>
          <form action="#">
            <div class="row">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email Required" required >
            </div>
            <div class="row">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="password" required >
            </div>
            <div class="row button">
              <input type="submit" value="Log In" >
              <div class="pass"><a href="#">Forgot Password</a></div>
            </div>
                <div class="signup">Not a Member?<a href="UserRegistration.php">Sign Up Now</a></div>
          </form>
        </div>
      </div>


      <a href="rate.html"> Done</a>

</body>
</html>
