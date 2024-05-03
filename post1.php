<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 
	<body style="background-color: #efdecd">
		<form method="POST" action="post2.php">
		
			<div class="container"  style="background-color: #f3ede1">
				<div class="page-header">
					<title>Employee's Payroll</title>	
					<h1>Employee's Payroll</h1>
				</div>
				
				<div class="container">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Employee ID</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="employeeID">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">First Name</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="firstName">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Middle Initial</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="middleInitial">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Last Name</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="lastName">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Basic Pay</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="basicPay">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Incentive Pay</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="incentivePay">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">House Rent Allowance</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="houseRentAllowance">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Meal Allowance</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="mealAllowance">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Provident Fund</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="providentFund">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Tax</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="tax">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<label for="name" class="control-label col-md-2">Loan</label>
						<div class="col-md-10">
						<input type="text" class="form-control" name="loan">
						</div>
					</div>
					</br>
					</br>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-10">
						<button class="btn btn-success btn-block" type="submit "value="submit">View Payslip</button>
						</div>
					</div>
					</br>
					</br>
					</br>
					</br>
					</br>
					</br>
				</div>
			</div>
		</form>
	</body>
</html>