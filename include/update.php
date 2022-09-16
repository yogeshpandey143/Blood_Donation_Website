<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="../css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Immune Donate</title>


  </head>
  <body>
     
 


    <!--*************** NAVBAR START **********-->
    <nav class="navbar navbar-expand-lg  fixed-top">
    <div class="container text-uppercase p-2">
      
   

     <a class="navbar-brand font-weight-bold text-white " href="../index.php">IMMUNE DONATE  </a>

    <button class="navbar-toggler ml" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon ml-auto"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto text-uppercase">
        <li class="nav-item active">
          <a class="nav-link " aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../donate.php">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../donor.php">Donor</a>
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

 

<!--*************** CENTER SECTION  END **********-->





       <!--*************** our contact us  start-->

   

      <section class="contactus" id="contactid" >

   <div class="container headings text-center">

    <h1 class="text-center font-weight-bold">UPDATE OR EDIT</h1>

  </div>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-10  offset-lg-2  offset-md-2 offset-1">


            <form action="" method="POST">





			         
			         <?php
			  

			include 'connection.php'; 

			$firstn = $_GET['firstname'];

             $showquery = "select * from contactinfo where firstname= '$firstn' ";

             // compare data with database table

             $showdata = mysqli_query($con,$showquery);

             // for convert array into data

             $arrdata= mysqli_fetch_array($showdata);

			if(isset($_POST['sub'])){


			  $first= $_POST['first'];
			  $last= $_POST['last'];
			  $email= $_POST['email'];
			  $address= $_POST['address'];
			  $mobile= $_POST['mobile'];
			  $anything= $_POST['anything'];


			  $insertquery = " insert into contactinfo(firstname,lastname,email,address,mobile,anything)values('$first','$last','$email','$address','$mobile','$anything')";


			$result = mysqli_query($con,$insertquery );

			if($result)
			{
			?>

			<script >
			  alert('data inserted successfull!');
			</script>

			<?php

			}
			else
			{
			 ?>

			<script >
			  alert('data not inserted !');
			</script>
			<?php 
			}

			}

			?>









                <div class="form-group col-12">
          
          <input type="text" class="form-control" id="userfirst" placeholder="First Name"  required autocomplete="off" name="first" value="<?php echo $arrdata['firstname']; ?>">
        </div>

          <div class=" form-group  col-12">
         
          <input type="text" class="form-control" id="userlast" placeholder="Last Name" required autocomplete="off" name="last" value="<?php echo $arrdata['lastname']; ?>">
        </div>


        <div class=" form-group col-12">
         
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required autocomplete="off" name="email" value="<?php echo $arrdata['email'];?>">
        </div>

        


        <div class=" form-group  col-12">
          
          <input type="text" class="form-control" id="inputAddress" placeholder="Address"  required autocomplete="off" name="address" value="<?php echo $arrdata['address'];?>">
        </div>
     


        <div class=" form-group col-12 ">
          <input type="number" class="form-control" id="inputNum"   placeholder="Mobile No"  required autocomplete="off" name="mobile" value="<?php echo $arrdata['mobile'] ;?>">
        </div>


        <div class="form-floating col-12">
  <textarea class="form-control" placeholder="Ask Me Anything" id="floatingTextarea2" style="height: 100px" name="anything" ></textarea>
 
</div>

      
        <div class="form-button mt-2 d-flex  justify-content-center ">
          <button type="submit" class="botton " name="sub">Submit</button>
        </div>
      </form>
      
    </div>
  </div>
</div>




</section>


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






<?php
  

include 'include/connection.php'; 

if(isset($_POST['sub'])){


  $first= $_POST['first'];
  $last= $_POST['last'];
  $email= $_POST['email'];
  $address= $_POST['address'];
  $mobile= $_POST['mobile'];
  $anything= $_POST['anything'];


  $insertquery = " insert into contactinfo(firstname,lastname,email,address,mobile,anything)values('$first','$last','$email','$address','$mobile','$anything')";


$result = mysqli_query($con,$insertquery );

if($result)
{
?>

<script >
  alert('data inserted successfull!');
</script>

<?php

}
else
{
 ?>

<script >
  alert('data not inserted !');
</script>
<?php 
}

}

?>


<?php

?>