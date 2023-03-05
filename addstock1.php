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
     
        $s_id = $_POST['s_id'];
		$s_name = $_POST['s_name'];
		$s_quantity = $_POST['s_quantity'];
		$s_perquantity=$_POST['s_perquantity'];
		if(!empty($s_name) &&  !empty($s_quantity)&&  !empty($s_id) &&  !empty($s_perquantity))
		{
			
			
        
		
			$query = "insert into stock (s_id,s_name,s_quantity,s_perquantity ) VALUES ('$s_id','$s_name', '$s_quantity','$s_perquantity')";

			mysqli_query($con, $query);
            

		}else
		{
			echo "Please enter some valid information!";
			header("Location: viewstock.php");
		}
	}
 mysqli_close($con); 
 header("Location: viewstock.php");
?>