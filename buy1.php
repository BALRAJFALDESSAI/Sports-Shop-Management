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
$resquantity=$_POST['quantity'];
$resname=$_POST['s_name'];
$ressid=$_POST['s_id'];
$query= "SELECT * FROM stock where s_id ='".$ressid."' ";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$s_quantity = $row['s_quantity'];
	
	if($s_quantity>0 && $resquantity<=$s_quantity)
	{
		$s_quantity-=$resquantity;
		//new
		if($s_quantity==0)
		{
			$query = "delete from stock  where s_id='".$ressid."'";
			mysqli_query($con, $query);
		}
		else
		{
		$query = "UPDATE stock SET s_quantity='".$s_quantity."' where s_id='".$ressid."'";
			mysqli_query($con, $query);
		}
		$x=$row['s_perquantity'];
		$p=$x*$resquantity;
		
		$query1 ="insert into buy (b_price) VALUES ('$p')";
		$result1 = mysqli_query($con,$query1);

		header("Location: bill.php");
	}
	else{
		echo "no stock currently available!";
			header("Location: buy.php");
	}
 mysqli_close($con); 
?>