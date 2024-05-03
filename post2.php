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

	<style>
        body {
            background-color: #f5f5dc;
        }
        .container {
            margin-top: 50px;
            background-color: #efdecd;
            padding: 20px;
            border-radius: 5px;
        }
        .page-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .summary {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background-color: #fffff0;
        }
        .summary p {
            margin-bottom: 15px;
        }
        .summary strong {
            margin-right: 10px;
        }
        .summary h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }
     
        .form-control {
            background-color: #e9ecef;
            border: none;
            pointer-events: none;
        }
	</style>
</head>

	<body>
		<div class="container">
			<div class="page-header">
				<h1>Employee's Payroll - Summary</h1>
		</div>

			<div class="summary">
				<?php

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					
					$employeeID = $_POST['employeeID'];
					$firstName = $_POST['firstName'];
					$middleInitial = $_POST['middleInitial'];
					$lastName = $_POST['lastName'];
					$fullName = $firstName . ' ' . $middleInitial . ' ' . $lastName;
					$basicPay = $_POST['basicPay'];
					$incentivePay = $_POST['incentivePay'];
					$mealAllowance = $_POST['mealAllowance'];
					$hra = $_POST['houseRentAllowance']; // Retrieve HRA value
					$providentFund = $_POST['providentFund'];
					$tax = $_POST['tax'];
					$loan = $_POST['loan'];

					$totalEarnings = $basicPay + $incentivePay + $mealAllowance + $hra;
					
					$totalDeductions = $providentFund + $tax + $loan;

					$netPay = $totalEarnings - $totalDeductions;

					echo "<h2>EMPLOYEE'S PAYSLIP</h2>";
					echo "<p><strong>Employee ID:</strong> <input type='text' class='form-control' value='$employeeID' disabled></p>";
					echo "<p><strong>Full Name:</strong> <input type='text' class='form-control' value='$fullName' disabled></p>";
					echo "<h2>EARNINGS</h2>";
					echo "<p><strong>Basic Pay:</strong> <input type='text' class='form-control' value='$basicPay' disabled></p>";
					echo "<p><strong>Incentive Pay:</strong> <input type='text' class='form-control' value='$incentivePay' disabled></p>";
					echo "<p><strong>Meal Allowance:</strong> <input type='text' class='form-control' value='$mealAllowance' disabled></p>";
					echo "<p><strong>House Rent Allowance (HRA):</strong> <input type='text' class='form-control' value='$hra' disabled></p>"; // Display HRA
					echo "<h2>DEDUCTIONS</h2>";
					echo "<p><strong>Provident Fund:</strong> <input type='text' class='form-control' value='$providentFund' disabled></p>";
					echo "<p><strong>Tax:</strong> <input type='text' class='form-control' value='$tax' disabled></p>";
					echo "<p><strong>Loan:</strong> <input type='text' class='form-control' value='$loan' disabled></p>";
					echo "<h2>COMPUTATIONS</h2>";
					echo "<p><strong>Total Earnings:</strong> <input type='text' class='form-control' value='$totalEarnings' disabled></p>";
					echo "<p><strong>Total Deductions:</strong> <input type='text' class='form-control' value='$totalDeductions' disabled></p>";
					echo "<p><strong>NET Pay:</strong> <input type='text' class='form-control' value='$netPay' disabled></p>";

					
					echo "<a href='javascript:history.back()' class='btn btn-success' style='margin-top: 20px;'>Back</a>";

				} else {
					
					echo "Form data not submitted.";
				}
				?>
			</div>
		</div>
	</body>
</html>

