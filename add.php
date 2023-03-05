<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Registration</title>
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
						<h1 class="h2">ADD CUSTOMER</h1>
						<p class="lead">
							Add Details
						</p>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<form action="addcustomer1.php" method="post">
	<div class="form-group">
										<label>NAME</label>
										<input class="form-control form-control-lg" type="text" name="c_name" placeholder="Enter name of customer">
									</div>
									<div class="form-group">
										<label>NUMBER</label>
										<input class="form-control form-control-lg" type="text" name="c_number" placeholder="Enter number of customer">
									</div>
									
									<div class="text-center mt-3">
										 <button type="submit" class="btn btn-lg btn-primary">Submit</button> <br><br>
									</div>
								
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
    <div class="text-center mt-3">
		<button type="button" class="btn btn-lg btn-primary" onclick="location.href='customer.php'">BACK</button> <br><br>
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