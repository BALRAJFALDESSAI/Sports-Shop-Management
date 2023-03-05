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
      
		$e_name = $_POST['e_name'];
		$e_DOB = $_POST['e_DOB'];
		$e_number = $_POST['e_number'];
		if(preg_match('/^[0-9]{10}+$/', $e_number)) 
	{
			echo "Valid Phone Number";
			
		if(!empty($e_name) && !empty($e_DOB) &&  !empty($e_number) )
		{
           
		
			$query = "insert into employee (e_name,e_DOB,e_number ) VALUES ('$e_name', '$e_DOB', '$e_number')";

			mysqli_query($con, $query);


		}else
		{
			echo "Please enter some valid information!";
			header("Location: employee.php");
		}
	
 mysqli_close($con); 
 header("Location: employee.php");
	}
 else
{
echo "Invalid Phone Number";
header("Location: validation2.php");
}
	}
?>