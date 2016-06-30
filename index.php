<?php 
if(!isset($_GET['rubrique'])){
	$rubrique = "index";
} else{
	$rubrique = $_GET['rubrique'];
}

$title = '';
$content = '';


switch ($rubrique) {
	case 'accueil':
	{
		$title = "Accueil";
		$content = file_get_contents('src/contenu.txt');
	}
		break;

	case 'blog':
	{
			$title = "Blog";
			$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, nostrum hic omnis culpa possimus quaerat. Dolor facilis hic pariatur a incidunt, et placeat unde vel minima, aliquam rem voluptate atque.";
	}
		break;

	case 'actu':
	{
		$title = "Actualités";
		$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, nostrum hic omnis culpa possimus quaerat. Dolor facilis hic pariatur a incidunt, et placeat unde vel minima, aliquam rem voluptate atque.";
	}
		break;

	case 'contact':
	{
		$title = "Contact";
		$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, nostrum hic omnis culpa possimus quaerat. Dolor facilis hic pariatur a incidunt, et placeat unde vel minima, aliquam rem voluptate atque.";
	}
	break;

	case '404':
	default:
	{
		$title = "404 not found";
	}
		break;
}







include('inc/header.php');
include('inc/content.php');
include('inc/footer.php');

 ?>
