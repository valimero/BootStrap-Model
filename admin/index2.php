<?php include('inc/post.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<script src="../js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
	<h1>Panel Administration</h1>
	<form action="index.php" method="post">
		<textarea name="text" id="text"><?php echo file_get_contents('../src/contenu.txt'); ?></textarea>
		<input type="submit" name="send"/>
	</form>
</body>
</html>