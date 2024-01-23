<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials1/_dbconnect1.php';
  $email = $_POST["email"];
  $password = $_POST["password"];
  $aadhar = $_POST["aadhar"];

  
  //$sql = "Select * from users1 where email = '$email' AND password = '$password'";
  $sql = "Select * from users1 where email = '$email' AND aadhar = '$aadhar' ";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
    $login= true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['aadhar'] = $aadhar;
    header("location:welcome1.php");
  }
  else{
    $showError = "Invalid Credentials";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
<style>

body{
    background-image: url("background2.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
.container{
    background-color:rgb(34, 186, 220);
    width: 460px;
    padding: 80px 50px ;
    margin: auto;
    margin-top: 200px;
    border-width: 0px;
    box-shadow: 10px 15px rgb(23, 77, 89);
    border-radius: 25px;
}
.button{
  position:relative;
  left:73px;
}
.input-text{
    width: 100%;
    height:20px;
    border-radius: 8px;
}
.btn{
    width:60%;
    height: 30px;
    border-radius: 8px;
    border: none;
    margin-left: 50px;
}
.btn:hover{
    background-color: rgb(53, 39, 210);
    color:white;
}




</style>

  </head>
  <body>
    <?php require '<partials1/_nav1.php' ?>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong>'.$showError.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div> ';
      }
    ?>

    <div style="position:relative;top:-60px;left:0px;" class="container">
    <div style="position:relative;left:80px;font-size:25px;"class="title"><b>Employee Login</b></div><br/><br/>
    <div class="content">
      <form action="/loginsystem1/login1.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" id="email" placeholder="Enter your email" required/>
          </div><br/>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password" required/>
          </div><br/>
          <div class="input-box">
            <span class="details">Aadhar card number</span>
            <input type="aadhar" name="aadhar" id="aadhar"  placeholder="Enter your Aadhar card number" required/>
          </div><br/>

        </div>
        <div  style="position:relative;left:-0px;"class ="button">
          <input style="border-radius:10px;" type="Submit" name= "Login" value="Log in">
        </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>