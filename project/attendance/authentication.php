<?php
  $date = $_POST["date"];
  $time = $_POST["time"];
  $name = $_POST["name"];
  $attend = $_POST["attend"];

  $conn = new mysqli('localhost','root','','users');
  if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
  }
  else{
    $sql = "insert into attendance(date, time, name, attend) values('$date','$time','$name','$attend')";
    $query = mysqli_query($conn,$sql);
    $conn->close();
  }
?>
<body style="background:#FDDFFA;">
<p>submission approved.<a href="http://127.0.0.1/project/attendance/index.php"><b>click here to go back</b></a>.Have a nice day.</p>
</body>