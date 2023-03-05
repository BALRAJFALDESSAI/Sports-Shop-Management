
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

	include("connection.php");
		if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from database
			$query = "select * from admin  ";
			$result = mysqli_query($con, $query);
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password)
					{
						
						header("Location: login.php");

						die;
					}
					
				}
				

			}
			echo "wrong username  or password!";
		}else
		{
			echo "wrong  username or password!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">
					<div class="text-center mt-4">
						<h1 class="h2">SPORTS SHOP</h1>
						<p class="lead">
							sign in.
						</p>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<form  method="post">
									
									<div class="form-group">
										<label>username</label>
										<input class="form-control form-control-lg" type="text" name="user_name" placeholder="Enter your username">
									</div>
					                <div class="form-group">
									<label>Password</label>
										<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password">
									</div>
									<div class="text-center mt-3">
										 <button type="submit" class="btn btn-lg btn-primary">Sign in</button> <br><br>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
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