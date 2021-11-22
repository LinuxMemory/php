<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


var_dump($_POST);

$db_host = "localhost";
$db_user = "cmsuser";
$db_pass = "F&se1o81";
$db_name = "cms";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$db = "INSERT INTO articles (title, content, published_time)
	   VALUES (?, ?, ?)";
	
$stmt = mysqli_prepare($conn, $db);
	
if ($stmt === false) {
	echo mysqli_error($conn);
} else {
	
	mysqli_stmt_bind_param($stmt, "sss", $_POST['title'], $_POST['content'], $_POST['published_time']);
	
	if (mysqli_stmt_execute($stmt)) {
		$id = mysqli_insert_id($conn);
	echo "Inserted ID equals: $id";
	}
	
else {
 echo mysqli_stmt_error($stmt);



	
}
}
}


?>


<!DOCTYPE html>
<html>
<body>
	<h1>My Blog</h1>
	<h3>New Article</h3>
	<form method="post">
		
		<div>
			<label for="title">Title</label>
			<input type="text" name="title" id="title" placeholder="Article Title"><br>
		</div>
		<p></p>
		
		
		<div>
			<label for="Content">Content</label>
			<textarea placeholder="Article content" rows="4" cols="40" name="content" id="Content"></textarea><br>
		</div>
		<p></p>
		
		<div>
			<label for="published_time">Publication date and time</label>
			<input type="datetime" name="published_time" id="published_time" placeholder="Example: 2018-04-31"><br>
		</div>
		
		<p></p>
		<button>Add</button>
		
		
		
	</form>
	
	
</body>	
</html>