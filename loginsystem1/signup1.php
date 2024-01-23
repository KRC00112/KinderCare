<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials1/_dbconnect1.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $aadhar = $_POST["aadhar"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $creche = $_POST["creche"];
    $gender = $_POST["gender"];

    $existSql = "SELECT name,email,phone,aadhar,password,creche,gender  
                FROM users1 
                WHERE email = '$email' OR phone = '$phone' OR aadhar = '$aadhar'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    if ($numExistRows > 0) {
        $showError = "Email, Phone, or Aadhar already exists";
        echo '<script>alert("Email, Phone, or Aadhar already exists");</script>';
    } else {
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users1 (name, email, phone, aadhar, creche, password, gender) 
                    VALUES ('$name', '$email', '$phone', '$aadhar', '$creche', '$hash', '$gender')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
        }
    }
}
?>
<!-- Rest of your HTML code remains unchanged -->



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signup </title>
    <style>
      <!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');



*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background:  #e35bab;
}


.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}

.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #e35bab;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
  position: relative;  
  top: 0;  
  left: 0;  
  height: 30px;  
  width: 30px;  
  background-color: lightgray;  
  border-radius: 50%;  
 }
 form .button{
   height: 45px;
   margin: 35px 0;
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background:  #e35bab;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background:  #b129e7;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

.navbar {
   
   display: flex;
   flex-wrap: wrap;
   align-items: center;
   justify-content: space-between;
   padding-top: 0.5rem;
   padding-bottom: 0.5rem;
   position: absolute;
   top: 0px;
   left: 0px;
   width: 100%;
        }

.container {
   max-width: 700px;
   width: 100%;
   background-color: #fff;
   position: fixed;
   padding: 25px 30px;
   border-radius: 5px;
}

    </style>
    
</body>
</html>
    </style>
  </head>
  <body>
    <?php require '<partials1/_nav1.php' ?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
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

    <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="/loginsystem1/signup1.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="name" name="name" id="name"  placeholder="Enter your name" required/>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" id="email" placeholder="Enter your email" required/>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="phone" id="phone" pattern="[6789][0-9]{9}" placeholder="Enter your number" required/>
          </div>
          <div class="input-box">
            <span class="details">Aadhar card number</span>
            <input type="aadhar" name="aadhar" id="aadhar"  placeholder="Enter your Aadhar card number" required/>
          </div>
          <div class="input-box">
            <span class="details">Creche name</span>
            <input type="creche" name="creche" id="creche"  placeholder="Enter Creche Name" required/>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password" required/>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your password" required/>
          </div>
          
        <div class="input-box">
            <span class="details">Gender</span>
            <label for="gender">Select your gender</label>
            <input style="height:20px;position:relative;top:30px;" type="radio" name="gender" value="male"> Male
            <input style="height:20px;position:relative;top:30px;" type="radio" name="gender" value="female"> Female
            

        </div>
        <div class="button">
          <input type="Submit" name= "Submit" value="Submit">
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>