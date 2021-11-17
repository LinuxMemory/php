<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

var_dump($_POST);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
<body>
	<form method="POST">
		
			<p><input type="text" name="text"></p>
			<p><input type="password" name="password"></p>
			<p><input type="name" name="name" value="Vvedite"></p>
			<button>Search</button>
	</form>
	
</body>
</html>