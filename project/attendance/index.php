
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <style>
    body{
    background-image: url("35.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    }
    .container{
    background-color:rgb(123, 251, 232);
    width: 250px;
    padding: 80px 50px ;
    margin: auto;
    margin-top: 200px;
    border-width: 0px;
    box-shadow: 10px 15px rgb(3, 98, 130);
    border-radius: 25px;
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
    background-color: rgb(105, 71, 183);
    color:white;
    }
    </style>
</head>
<body>
    <div class=container>
    <form action="authentication.php" method="POST">
        <label for="date">Choose Date:</label>
        <input type="date" id="date" name="date"><br><br>
        <label for="time">Select time:</label>
        <input  type="time" id="time" name="time"><br><br>
        <label for="name">Name of Child:</label><br><br>    
        <input type="name" id="name" name="name"><br><br>
        <label for="attend">Attendance:</label>
        <br><br>
          <div>  
            <input  type="radio" name="attend" value="absent"> Absent
            <input  type="radio" name="attend" value="present"> Present
            <br><br>
            <input class="button" type="Submit" name= "Submit" value="Submit">  
        </div>  
        <hr>
        <a style="font-style:italic;text-decoration:none;" href="http://127.0.0.1/project/attendance/display.php"><b>click here to view the attendence record till date</b></a>
        

    </div>
        

    </form> 
    
    
    
</body>
</html>