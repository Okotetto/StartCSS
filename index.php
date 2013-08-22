<!DOCTYPE html>
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="pl"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="pl"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pl"> <!--<![endif]-->
	<head>
		<!--META-->
		<meta charset="utf-8">
		<title>Page title</title>
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width">

		<!--SEO-->
		<meta name="description" content="#">
		<meta name="keywords" content="#">
		<link rel="canonical" href="#">
		<meta name="google-site-verification" content="#">

		<!-- Reset and predefined helpers -->
		<link rel="stylesheet" href="css/main.css">
		<!--[if IE 7]><link rel="stylesheet" href="css/ie.css"><![endif]-->
		<!--END SITE CSS-->
		<script src="js/vendor/modernizer.js"></script>
	</head>

	<?php
		$entryPopup = false;
		$file = !empty($_GET['pageName']) ? $_GET['pageName'] : 'home';

		switch($file) {
			case 'popup':
				$layout = 'layout';
				$entryPopup = true;
				break;

			default:
				$layout = 'layout';
				$classBody = $file;
		}

		$page = 'pages/'.$file.'.php';
?>

	<body <?php if(!empty($classBody)) echo 'class="'.$classBody.'"'; ?>>
		<?php
			include($layout.'.php');
		?>

		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<script>window.jQuery || document.write('<script src="js/vendor/jquery.1.10.2.js"><\/script>')</script>

		<?php if ( $googleMapsRequire ): ?>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<?php endif; ?>

		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script src="js/ga.js" async></script>
	</body>
</html>
