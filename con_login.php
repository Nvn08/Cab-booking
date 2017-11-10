<?php

$con=mysqli_connect("localhost","root",'Naveen$aini');
if(!$con)
{
die('COuld not connect:'.mysqli_connect_error()) ;
}

mysqli_select_db($con,"Project") ;

$userid=$_POST['email1'] ;
$pass=$_POST['password3'] ;

$sql=mysqli_query($con,"SELECT * FROM Login WHERE email='$userid' and passwd='$pass'") ;
$count=mysqli_num_rows($sql);
echo $count;
if ($count===1) {
	
	session_start();
	$_SESSION['id']=$userid;
    header("Location: bookingpage.php");
} else {
	echo "<script> alert('user not found try again');
			window.location.href='registrationpage.php';</script>";
    //header("Location: registrationpage.php");
}

mysqli_close($con) ;

?>
