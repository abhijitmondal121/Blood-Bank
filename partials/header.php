<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){

echo'

<nav class="navbar fixed-top navbar-expand-sm navbar-light" style="position: sticky;top: 0px; background-color:white;	" >
  <!-- <a class="navbar-brand" href="#"><img src="partials/n3.png"style="height:70px;width:320px;" alt="" srcset=""></a> -->
  <a class="navbar-brand" href="#" style="color:#e60000;font-family: serif;font-size:32px;font-weight:bold;">Blood 
    <img src="partials/bl.png" alt="" style="height:40px;width:50px;margin:0px 10px;">Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
  



      <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show.php">Check Availability(current)</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php#about_section">About Us <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="logout.php">Logout</a>
      </li>

    </ul>
  </div>
</nav>';
}
else{

  echo'

  <nav class="navbar fixed-top navbar-expand-sm navbar-light" style="position: sticky;top: 0px; background-color:white;	" >
    <!-- <a class="navbar-brand" href="#"><img src="partials/n3.png"style="height:70px;width:320px;" alt="" srcset=""></a> -->
    <a class="navbar-brand" href="#" style="color:#e60000;font-family: serif;font-size:32px;font-weight:bold;">Blood 
    <img src="partials/bl.png" alt="" style="height:40px;width:50px;margin:0px 10px;">Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     
    <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    
  
  
  
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="show.php">Check Availability(current)</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php#about_section">About Us <span class="sr-only">(current)</span></a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link " href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="signin.php">SignIn</a>
        </li>
      </ul>
     
    </div>
  </nav>';
}
