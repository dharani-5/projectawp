<?php
 include('config.php');
    if(isset($_POST['register']))
    {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm-password"];
    $duplicate = mysqli_query($conn, "SELECT * FROM userdata WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0)
    {
        echo 
        "<script> alert('username or email has already taken'); </script>";
    }
    else{
        if($password==$confirm){
            $query = "INSERT INTO userdata VALUES('$username','$email','$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('register success'); </script>";
            header("Location:home.php");
        }
        else{
            echo 
            "<script> alert('password and confirm password do not match'); </script>";
        }
    }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      
      h1 {
        text-align: center;
        color: #333333;
      }
      
      form {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #999999;
      }
      
      label {
        display: block;
        font-size: 16px;
        font-weight: bold;
        color: #333333;
        margin-bottom: 5px;
      }
      
      input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #999999;
        border-radius: 5px;
        margin-bottom: 20px;
      }
      
      button[type="submit"] {
        background-color: #333333;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      
      button[type="submit"]:hover {
        background-color: #555555;
      }
    </style>
  </head>
  <body>
    <h1>Registration Form</h1>
    <form name="form" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password">
      
      <button type="submit" name="register">register</button>
    </form>
    <a href="login.php">login page</a>
  </body>
</html>
