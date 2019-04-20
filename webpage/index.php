<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
		<style media="screen">
			.error {
				color: blue;
			}
		</style>
	</head>
	
	<body>
	<?php
		error_reporting(0);
		$name=$_REQUEST["name"];
		$email=$_REQUEST["email"];
		$username=$_REQUEST["username"];
		$password=$_REQUEST["password"];
		$confirmedpassword=$_REQUEST["confirmedpassword"];
		$dateOfBirth=$_REQUEST["dateOfBirth"];
		$gender= isset($_REQUEST["gender"])? $_REQUEST["maritalStatut"] : null;
		$maritalStatus=$_REQUEST["maritalStatus"];
		$address=$_REQUEST["address"];
		$city=$_REQUEST["city"];
		$postalCode=$_REQUEST["postalCode"];
		$homePhone=$_REQUEST["homePhone"];
		$mobilePhone=$_REQUEST["mobilePhone"];
		$cardNumber=$_REQUEST["cardNumber"];
		$cardExpiryDate=$_REQUEST["cardExpiryDate"];
		$salary=$_REQUEST["salary"];
		$website=$REQUEST["website"];
		
	?>
		
		
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
				???
			</dd>
			
			<!-- Write other fiels similar to Name as specified in lab6.pdf -->
		</dl>
		
		<div>
			Register
		</div>
	</body>
</html>
