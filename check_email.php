<?php 
require_once("includes/dbconfig.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	
		$result =mysqli_query($conn,"SELECT email FROM complainant WHERE email='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'>Sorry, Email already exists.</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration.</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
