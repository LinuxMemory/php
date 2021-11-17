<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

var_dump($_POST);

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
			<label for="published_at">Publication date and time</label>
			<input type="datetime" name="published_at" id="published_at" placeholder="Example: 2018-04-31"><br>
		</div>
		
		<p></p>
		<button>Add</button>
		
		
		
	</form>
	
	
</body>	
</html>