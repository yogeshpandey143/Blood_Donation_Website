<?php 

$username ="root";
$passward="";
$server ='localhost';
$db ='contactus';


$con =mysqli_connect($server,$username,$passward,$db);

if($con){
	// echo "Connection Successful!";
?>

<script >
	alert('connection successful!');
</script>
<?php

}
else{
	  echo "No Connection!";
	  die("No Connection! " . mysqli_connect_error());
}

 ?>