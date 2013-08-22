<!DOCTYPE html>
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<!--META-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<base href="http://eodczyt/html/">

		<!--SEO-->
		<meta name="description" content="#">
		<meta name="keywords" content="#">
		<link rel="canonical" href="#">
		<meta name="google-site-verification" content="#">

		<title>Page title</title>

		<!-- Reset and predefined helpers -->
		<link rel="stylesheet" href="css/main.css">
		<!--[if IE 7]><link rel="stylesheet" href="css/ie.css"><![endif]-->
		<!--END SITE CSS-->
		<script src="js/vendor/modernizer.js"></script>
	</head>

	<?php
		$entryPopup = false;

		if(!empty($_GET['pageName'])){
			$file = $_GET['pageName'];
		} else {
			$file = 'home';
		}

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
		<script>window.jQuery || document.write('<script src="js/vendor/jquery.js"><\/script>')</script>

		<?php if ( $googleMapsRequire ): ?>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<?php endif; ?>

		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-#####-#']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.async = true;
				ga.src = 'http://google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>