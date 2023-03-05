<?php 
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sports";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}


if($_SERVER['REQUEST_METHOD'] == "POST")
	{
      
	$c_name = $_POST['c_name'];
	$c_number = $_POST['c_number'];
	if(preg_match('/^[0-9]{10}+$/', $c_number)) 
	{
			echo "Valid Phone Number";
			
		if(!empty($c_name) &&  !empty($c_number) )
		{
           
		
			$query = "insert into customer (c_name,c_number ) VALUES ('$c_name', '$c_number')";

			mysqli_query($con, $query);


		}else
		{
			echo "Please enter some valid information!";
			header("Location: customer.php");
		}

 mysqli_close($con); 
 header("Location: customer.php");
} else
{
echo "Invalid Phone Number";
header("Location: validation1.php");
}
}
?>