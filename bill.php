<?php 

    require_once("connection.php");
	$query = " select * from buy order by buy_id desc limit 1 ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">

<div class="container h-100">
		<div class="row h-100">
			<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4">
						<h1 class="h2">SPORTS SHOP</h1>
						<br><br>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
                        <table class="table table-bordered">
                            <tr>
                                <td> TOTAL AMOUNT IS </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $b_price = $row['b_price'];
                            ?>
                                    <tr>
                                        <td><?php echo $b_price ?></td>
                                    
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                        <br><br>
                        <div class="text-center mt-3">
										 <button type="button" class="btn btn-lg btn-primary" onclick="location.href='viewstock.php'">BACK</button> <br><br>
									</div>
                        </div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
    <div class="text-center mt-3">
		<button type="button" class="btn btn-lg btn-primary" onclick="location.href='login.php'">HOME</button> <br><br>
	</div>
    <style type="text/css">
body{
    margin-top:20px;
    background-color: #f2f3f8;
}
.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e5e9f2;
    border-radius: .2rem;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>