<?php include('inc/post.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<script src="../js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css"></head>
<body>
	<div class="row">
		<div class="col-md-6 col-md-push-3">
			<h1>Panel Administration</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 col-md-push-1">
			<form action="index.php" method="post">
				<textarea name="text" id="text">
					<?php echo file_get_contents('../src/contenu.txt'); ?></textarea>
				<input type="submit" name="send"/>
			</form>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>