<?php
$db_host = "localhost";
$db_user = "cmsuser";
$db_pass = "F&se1o81";
$db_name = "cms";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
echo mysqli_connect_error();

}
if (isset($_GET['id']) && is_numeric($_GET['id'])){
$db = "select * from articles where id = " . $_GET['id'];

$results = mysqli_query($conn, $db);

if ($results === false){
echo mysqli_error();
}

$articles = mysqli_fetch_assoc($results);

} else {
$articles === null;

}

?>




<!DOCTYPE html>

<html>
	<head>
		<title>First PHP page</title>
	</head>
<body>
	<?php if ($articles === null): ?>
	<p><?php echo "No articles found"; ?></p>
	<?php else: ?>
	
	<h1>Store types</h1>
	<ul>
		<li><h3><?php echo $articles['title']; ?></h3></li>
		<p><?php echo $articles['content']; ?><p>
	</ul>
	<?php endif; ?>
</body>
</html>