<?php
$db_host = "localhost";
$db_user = "cmsuser";
$db_pass = "F&se1o81";
$db_name = "cms";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
echo mysqli_connect_error();

}

$db = "select * from articles;";

$results = mysqli_query($conn, $db);

if ($results === false){
echo mysqli_error();
}

$articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

var_dump($articles);

?>




<!DOCTYPE html>

<html>
	<head>
		<title>First PHP page</title>
	</head>
<body>
	<?php if (empty($articles)): ?>
	<p><?php echo "No articles found"; ?></p>
	<?php else: ?>
	
	<h1>Store types</h1>
	<?php foreach($articles as $articles): ?>
	<ul>
		<li><h3><a href="article.php?id=<?php echo $articles['id']; ?>"><?php echo $articles['title']; ?></a></h3></li>
		<p><?php echo $articles['content']; ?><p>
	</ul>
	<?php endforeach; ?>
	<?php endif; ?>
</body>
</html>