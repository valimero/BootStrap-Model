<?php
if(isset($_POST['text']))
{
	$contenu = $_POST['text'];
	file_put_contents('../src/contenu.txt', $contenu);
}

 ?>