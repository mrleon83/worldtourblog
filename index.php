<?php
include ('includes/header.php');
include('includes/function.php');
switch($page)
{
	case 'home':
	include ('blog.php');
	break;

	case 'about':
	include ('aboutus.php');
	break;

	case 'wherearewe':
	include ('wherearewe.php');
	break;

	case 'gallery':
	include ('gallery.php');
	break;
	
	case 'login':
	include ('blogadmin.php');
	break;

	case 'itinerary':
	include ('itinerary.php');
	break; 

	case 'messageboard':
	include ('messageboard.php');
	break;
	
	default:
	include('blog.php');
	break;
}

include ("includes/footer.php");
?>

