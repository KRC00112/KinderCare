<?php

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  $loggedin=true;

}
else{
  $loggedin = false;
}

echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand "href="http://127.0.0.1/home.php">Kindercare</a>
   

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/loginsystem/welcome.php">Home</a>
        </li>';

        if($loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/loginsystem/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/loginsystem/signup.php">Signup</a>
        </li>';
        }
        if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
        </li>';
        }


      echo '</ul>
    
    </div>
  </div>
</nav>';
?>