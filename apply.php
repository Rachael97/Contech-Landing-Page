<?php
	
	include "db.php";
	
	$companyName = $_POST['companyName'];
	//echo $companyName;
	$companyCode = $_POST['companyCode'];
	$companyEmail = $_POST['companyEmail'];
	$companyTel = $_POST['companyTel'];
	$package = $_POST['package'];
	$country = $_POST['country'];
	$companySsm = $_POST['companySsm'];
	$companyGst = $_POST['companyGst'];
	$coverArea = $_POST['coverArea'];
	$targetCustomer = $_POST['targetCustomer'];
	$targetPeriod = $_POST['targetPeriod'];
	$customerName = $_POST['customerName'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$loginId = $_POST['loginId'];
	$customerEmail = $_POST['customerEmail'];
	$customerTel = $_POST['customerTel'];
	$password = $_POST['password'];
	
	$created_date = date('Y-m-d H:i:s');
	
	/* mysqli_query(
		
		$link,"INSERT INTO table_name(name) VALUES ('$name')"
	
	) or die (mysqli_error()); -->显示错误原因
	
	 echo success;
	
	*/
	
	
	
	mysqli_query($link,
	"INSERT INTO apply_list(companyName,companyCode,companyEmail,companyTel,package,country,companySsm,companyGst,coverArea,targetCustomer,targetPeriod,customerName,firstName,lastName,loginId,customerEmail,customerTel,password,created_date) VALUES ('$companyName','$companyCode','$companyEmail','$companyTel','$package','$country','$companySsm','$companyGst','$coverArea','$targetCustomer','$targetPeriod','$customerName','$firstName','$lastName','$loginId','$customerEmail','$customerTel','$password','$created_date')")or die(mysqli_error());
	
	
	//header ("location:about.html");
	
?>

<html>
	<head></head>
	<body onload="thank()" >
		<script>
		function thank(){
			alert("Thank you !");
		location.href="about.html"; }
		</script>
	</body>
</html>



