<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Immune Donate</title>


  </head>
  <body>
     
 
  

    <!--*************** NAVBAR START **********-->
    <nav class="navbar navbar-expand-lg  fixed-top">
    <div class="container text-uppercase p-2">
      
   

     <a class="navbar-brand font-weight-bold text-white " href="./index.php">IMMUNE DONATE  </a>
    <button class="navbar-toggler ml" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon ml-auto"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class=" navbar-nav ml-auto text-uppercase">
        <li class="nav-item active">
          <a class="nav-link " aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./donate.php">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./donor.php">Donor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Contact</a>
        </li>


              </ul>
    </div>
  </div>
      
</nav>






           <!--*************** our happy clients  start-->
      


      <section class="happyclient" >

   <div class="container headings text-center">

    <h1 class="text-center font-weight-bold">OUR HAPPY CLIENTS</h1>

    <p class="text-capitalize pt-1">Our Sastisfied Customers Says</p>
  </div>

 
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>





  <div class="carousel-inner container">


    <div class="carousel-item active">
      <div class="row">
          
          <div class="col-lg-4 col-md-4 col-12">
            
              <div class="box">
                  <a href="#"><img src="images/dp1.jpg"  class="img-fluid img-thumbnail"></a>

                  <p class=" mg-4">lorel is the artificial  text we have to make the psedo text</p>

                  <h1>Vinod Thapa</h1>
                  <h2>Street 23,bostan,UK</h2>
              </div>
          </div>
       

     
          
          <div class="col-lg-4 col-md-4 col-12">
            
              <div class="box">
                  <a href="#"><img src="images/dp2.jpg"  class="img-fluid img-thumbnail"></a>

                  <p class=" mg-4">lorel is the artificial  text we have to make the psedo text</p>

                  <h1>Vinod Thapa</h1>
                  <h2>Street 23,bostan,UK</h2>
              </div>
          </div>
       
          
          <div class="col-lg-4 col-md-4 col-12">
            
              <div class="box">
                  <a href="#"><img src="images/dp3.jpg"  class="img-fluid img-thumbnail"></a>

                  <p class=" mg-4">lorel is the artificial  text we have to make the psedo text</p>

                  <h1>Vinod Thapa</h1>
                  <h2>Street 23,bostan,UK</h2>
              </div>
          </div>
        </div>
    </div>


   </div>



  </div>

     <div>
         <h2 class="text-center pt-3" >List Of Donor</h2>
   </div>
  

</section>
      
      <!--*************** our happy clients  end-->



<div class="table-flag  ">
<table class="table table-success table-striped-columns align-item-center">
   <thead>
    <tr>
     
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Ques/Cause</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>

          <?php

          include 'include/connection.php';

          $selectquery = "select *from contactinfo";

          $query = mysqli_query($con , $selectquery);

          $nums = mysqli_num_rows($query);




          while($res = mysqli_fetch_array($query))
          {
            
          ?>
           
            

             <tr>
    
      <td><?php echo $res['firstname']; ?></td>
      <td><?php echo $res['lastname']; ?></td>
      <td><?php echo $res['email'];?></td>
      <td><?php echo $res['address'];?></td>
      <td><?php echo $res['mobile'] ;?></td>
      <td><?php echo $res['anything'] ;?></td>
      <td >

        <a class="ml-auto" href="include/update.php?firstname=<?php echo $res['firstname']; ?>" data-bs-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa-regular fa-pen-to-square "></i></a>


       <a href="#" data-bs-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa-solid fa-trash"></i></a>

     </td>

    </tr>

    <?php
          }
          ?>
  
  </tbody>
</table>
</div>





<!--*************** CENTER SECTION  END **********-->




         <!--*************** newsletter end-->

     <footer class="footersection" id="footerid">
       <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 text-center">
                 <div>
                    <h3>ABOUT IMMUNE DONATE</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
            </div>



             <div class="col-lg-4 col-md-6 col-12 text-center">
                 <div>
                    <h3>NAVIGATION LINK</h3>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">DONOR</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">DONATE</a></li>
                 </div>
            </div>



             <div class="col-lg-4 col-md-12 col-12 text-center">
                 <div>
                    <h3>NEWSLETTER</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>


               <div class="container">
     <div class="row">
       <div class="col-lg-8 offset-lg-2 col-12">
             
                        <div class="input-group mb-3">
              <input type="text" class="form-control news-input" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <span class="input-group-text" id="basic-addon2">Subscribe</span>
            </div>

       </div>
     </div>


     <div class="mt-5 align-item-center">
      <p>Copyright 2022 All right reversed</p>
       
     </div>


   </div>


                 </div>
            </div>
          </div>
       </div>
     </footer>


       <!--*************** footer   start-->
       




            <!--*************** footer end-->       

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


    <!--waypoint cdn --> 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--counter up cdn --> 

   <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




  </body>
</html>






