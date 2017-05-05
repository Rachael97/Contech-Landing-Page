<?php
	
	include "db.php";
	
	$enquiryName = $_POST['enquiryName'];
	$enquiryEmail = $_POST['enquiryEmail'];
	$enquiryTel = $_POST['enquiryTel'];
	$enquiryMessage = $_POST['enquiryMessage'];

	$created_date = date('Y-m-d H:i:s');
	
	mysqli_query($link,"INSERT INTO contact_form(enquiryName,enquiryEmail,enquiryTel,enquiryMessage,created_date) VALUES ('$enquiryName','$enquiryEmail','$enquiryTel','$enquiryMessage','$created_date')") or die (mysqli_query()); 
	
	//echo "success"
 
?>

<html>
	<head></head>
	<body onload="messageReceived()">
		<script>
			function messageReceived() {
				alert('谢谢您的提交，我们会尽快回复您的疑问！');
				location.href="about.html";
				
			}
		</script>
	
	</body>

</html>