<?php if (isset($_GET['p'])) {$p = $_GET['p'];} else {$p = "About";}?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	
	<title><?=$_GET['p']?></title>
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="css/layout.css" rel="stylesheet" type="text/css">
	<link href="css/screen.css" rel="stylesheet" type="text/css">
	<link href="css/superfish.css" rel="stylesheet" type="text/css">
	
	<script src="js/hoverIntent.js" type="text/javascript"></script>
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="js/superfish.js" type="text/javascript"></script>
	<script src="js/supersubs.js" type="text/javascript"></script>
	
</head>

<body>

<div id="header" class="container_6">
	<div class="grid_6">
		<h1><?=$p?> - Russell Industries Corp. - Canadian Industrial Project and Maintenance Services</h1>
	</div>
</div>


<div class="container_6" id="content">
	<?php include_once('inc/'.$p.'.inc');?>
	<div id="footer" class="grid_6">
	</div>
</div>

</body>
</html>