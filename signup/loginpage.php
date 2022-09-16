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

$email= $_POST['email'];
$password =$_POST['password'];

$emailsearch= " select * from registration where email ='$email' ";


$query = mysqli_query($con,$emailsearch);

$email_count = mysqli_num_rows($query);

if($email_count)
{
   $email_pass = mysqli_fetch_assoc($query);

   $db_pass =  $email_pass['password'];

   $pass_decode = password_verify($password,$db_pass);

   if($pass_decode)
   {
    echo "login successful!";

?>

<script >
  location.replace("../donate.php");
</script>

<?php

   }




   else
   {
    echo "password incorrect";
   }
 }

   else {
    echo "Invalid input";
   }
}


?>







<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card m-5" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">LOGIN ACCOUNT</h2>

              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <div class="d-flex justify-content-center mb-3">
                  <button type="button"
                    class="btn btn-danger btn-block btn-lg  text-body"><i class="fa-brands fa-google"></i> Login via Gmail</button>
                </div>

                 <div class="d-flex justify-content-center mb-3">
                  <button type="button"
                    class="btn btn-primary btn-block btn-lg  text-body"><i class="fa-brands fa-facebook"></i>  Login via facebook</button>
                </div>

                <p class="divider-text " ><span class="bg-light justify-content-center"><hr></span></p>

                <div class="form-outline mb-3">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Your Email" name="email" value="" required />
                 
                </div>

                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="Password" name="password" value="" required />
                  
                </div>


                
               

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="submit">Login</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">don't have account? <a href="../signup/regist.php"
                    class="fw-bold text-body"><u>signup here</u></a></p>

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