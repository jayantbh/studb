<?php
	require_once 'php/dbconn.php';
	require_once 'php/init.php';
?>
<html>
	<head>
		<title><?php echo $sitetitle;?></title>

		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/less" href="css/style.less">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	</head>
	<body>
		<?php
			require_once 'pages/header.php';
			require_once 'pages/sidebar.php';
			if(!isset($_GET["school"]) && !isset($_GET["college"]) && !isset($_GET["stream"]) && !isset($_GET["location"]) && !isset($_GET["search"]))
				require_once 'pages/home.php';
			else
				require_once 'pages/students.php';
			require_once 'pages/footer.php';
		?>
	</body>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/less.min.js"></script>
	<script type="text/javascript" src="js/jqueryui.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</html>