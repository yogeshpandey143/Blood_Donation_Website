<?php
 session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="signstyle.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Immune Donate</title>


  </head>


<body>






<?php

   include 'dbcon.php'; 

if(isset($_POST['submit'])){

 

  $username = mysqli_real_escape_string( $con, $_POST['username']);
  $email = mysqli_real_escape_string($con,  $_POST['email']);
  $password = mysqli_real_escape_string($con,  $_POST['password']);
  $cpassword = mysqli_real_escape_string($con,  $_POST['cpassword']);

  $pass = password_hash($password, PASSWORD_BCRYPT);
   $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

   $emailquery =  "select * from registration where email = '$email'";

   $query = mysqli_query($con, $emailquery);


   $emailcount = mysqli_num_rows($query);

   if( $emailcount>0)
   {
      echo "email already exists";
   }
   else 
   {
     if($password === $cpassword)
     {

     $insertquery = "insert into registration(name,email,password,cpassword) values('$username','$email','$pass','$cpass')";


     $iquery = mysqli_query($con, $insertquery);
     
     
      if($iquery){
        
               ?>

               <script >
                  alert('Inserted successful!');
               </script>
               <?php

               }
   else{

   ?>
                <script >
                  alert('not Inserted');
               </script>

               <?php
      } }

      else{

      ?>
           <script >
                  alert('password is not matching');
               </script>

               <?php
      }
    
   }

}
?>




<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <div class="d-flex justify-content-center mb-3">
                  <button type="button"
                    class="btn btn-danger btn-block btn-lg  text-body"><i class="fa-brands fa-google"></i>  GOOGLE</button>
                </div>

                 <div class="d-flex justify-content-center mb-3">
                  <button type="button"
                    class="btn btn-primary btn-block btn-lg  text-body"><i class="fa-brands fa-facebook"></i>  facebook</button>
                </div>

                <div class="form-outline mb-3">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg " placeholder="Your Name" name="username" value=""  required />
                 
                </div>

                <div class="form-outline mb-3">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Your Email" name="email" value="" required />
                 
                </div>

                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="Password" name="password" value="" required />
                  
                </div>

                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Confirm Password" name="cpassword" value="" required />
                  
                </div>

                <div class="form-check d-flex  mb-3">

                  <input class="form-check-input m-2" type="checkbox" value="" id="form2Example3cg" required />
                   </div>

                  <div class="form-check d-flex  mb-5">
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
               </div>
               

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="submit">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="./loginpage.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







</body>
</html>