<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Blood Bank!</title>
  </head>
  <style>
  #home{
    height:630px; 
  }
  #image{
    height:350px;
    width:320px;
  }
  #im{
    height:250px;
    width:220px;
    border-radius: 90px;
  }
  #about-text{
    font-size:20px;
  }
  .contai{
    background-color:#f0f5f5;
  }


   h2 {
     font-size:45px;
     font-family: Georgia, serif;
  
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid white; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto;/* Gives that scrolling effect as the typing happens*/
  letter-spacing: .10em; /* Adjust as needed */
  animation: 
    typing 8.5s steps(40,end),
    blink-caret .75s step-end ;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 60% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: white; }
}
@media screen and (min-device-width: 501px) and (max-device-width: 1170px){

  #home{
    height:470px; 
  }
  #image{
    height:200px;
    width:200px;
  }
  #im{
    height:200px;
    width:200px;
    border-radius: 90px;
  }
  #about-text{
    font-size:18px;
  }
  .contai{
    background-color:#f0f5f5;
  }
  h1{
    font-size:35px;
  }
   h2 {
     font-size:35px;
     font-family: Georgia, serif;
  
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid white; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto;/* Gives that scrolling effect as the typing happens*/
  letter-spacing: .10em; /* Adjust as needed */
  animation: 
    typing 8.5s steps(40,end),
    blink-caret .75s step-end ;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 60% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: white; }
}
}
@media screen and (min-device-width: 294px) and (max-device-width: 500px){

#home{
  height:300px;
}
#image{
  height:220px;
  background-size: 100%
  

}
#im{
  height:220px;
  background-size: 100%
  
  border-radius: 20px;
}
#about-text{
  font-size:15px;
  padding:10px;
}
#about_section{
  mergin-top:30px;
}
.contai{
  background-color:#f0f5f5;
}
h1{
  font-size:26px;
}

 h2 {
   font-size:16px;
   font-family: Georgia, serif;

overflow: hidden; /* Ensures the content is not revealed until the animation */
border-right: .15em solid white; /* The typwriter cursor */
white-space: nowrap; /* Keeps the content on a single line */
margin: 0 auto;/* Gives that scrolling effect as the typing happens*/
letter-spacing: .10em; /* Adjust as needed */
animation: 
  typing 8.5s steps(40,end),
  blink-caret .75s step-end ;
}

/* The typing effect */
@keyframes typing {
from { width: 0 }
to { width: 60% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
from, to { border-color: transparent }
50% { border-color: white; }
}
}
  </style>
  <body>
  <?php include "partials/dbconnect.php";
  include "partials/header.php";
  ?>
<!-- 
<div class=" jumbo-bg jumbotron jumbotron-fluid mb-2" id="home"style="" > -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 "id="home" src="partials/hos6.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " id="home" src="partials/hos2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="home" src="partials/hos3.jpg" alt="Third slide" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>
<center><h2 class="py-3">The gift of blood is the gift of life</h2></center>
<div class="container mt-1 mb-2 pt-2 pb-0" id="about_section">
<center><h1 class=" mt-2 mb-2 ">About Us</h1></center>

<div class="row py-2">

<div class="col-md-4" >
<img src="partials/ab3.png" id="image" alt="" srcset="">
</div>

<div class="col-md-8">
<p id="about-text">Blood Bank is aimed at promoting the awareness of blood donation among the public. It is committed to stay ahead of all linguistic-rational-religious-political differences and shall be fully focusing its objectives in health care activities, with technology support from WebCastle Media Pvt. Ltd., Cochin. Blood Bank Society is registered as per The TCLSCS Registration Act XII of 1956 under the Government of West Bengal. Blood donation refers to a practice where people donate their blood to people so it helps them with their health problems. Blood is one of the most essential fluids of our body that helps in the smooth functioning of our body. If the body loses blood in excessive amounts, people to get deadly diseases and even die. Thus, we see how blood donation is literally life-saving which helps people. It is also a sign of humanity that unites people irrespective of caste, creed, religion and more.</p>
</div>

</div>
</div>
<div class="contai mt-3">
<div class="container py-4" id="blood_section">
<center><h1 class=" my-5">Why Donate Blood?</h1></center>

<div class="row py-4">

<div class="col-md-4" >
<img src="partials/wbd1.jpg" id="im" alt="" srcset="">
</div>

<div class="col-md-8">
<p id="about-text">
Our nation requires 4 Crore Units of Blood while only 40 lakh units are available. Every two seconds, someone needs Blood. There is no substitue for human blood as it cannot be manufactured. Blood donation is an extremely noble deed, yet there is a scarcity of regular donors across India. From one unit of blood, red blood cells can be extracted for use in trauma or surgical patients. Plasma, the liquid part of blood, is administered to patients with clotting problems. The third component of blood, platelets, clot the blood when cuts or other open wounds occur, and are often used in cancer and transplant patients. Cryoprecipitated anti-hemophilic factor (AHF) is also used for clotting factors.</p>
</div>

</div>
</div>

</div>
<?php include "partials/_footer.php";  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
