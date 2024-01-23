<?php 

    require_once("connection.php");
    $query = " select * from attendance ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
    
    <title>View Records</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>


<body style="background:#FDDFFA;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="http://127.0.0.1/AELG.php">Kindercare</a>
  <ul class="navbar-nav">
    
  </ul>
</nav>

<div class="container-fluid" style="margin-top:80px">
  
  
  <h1><i>Child attendance report</i></h1>
</div>

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        
                        <table >
                            <tr>
                                <th> Date </th>
                                <th> Time </th>
                                <th> Name </th>
                                <th> Attendance </th>
                            </tr>

                            <?php 
                                $date=$time=$name=$attend='';
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $date = $row['date'];
                                        $time = $row['time'];
                                        $name = $row['name'];
                                        $attend = $row['attend'];
                            ?>
                                    <tr>
                                        <td><?php echo $date ?></td>
                                        <td><?php echo $time ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $attend ?></td>
                            
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        
    
</body>
</html>