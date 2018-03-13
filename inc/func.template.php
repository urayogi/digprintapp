<?php
function bukahead ($title ='') {
	$module=$mod;
	$panel = '
	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="Dashboard">
	    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

	    <title>'.mb_strtoupper($title).' | '.app_name.'</title>

	    <!-- Bootstrap core CSS -->
	    <link href="assets/css/bootstrap.css" rel="stylesheet">
	    <!--external css-->
	    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

	    <!-- Custom styles for this template -->
	    <link href="assets/css/style.css" rel="stylesheet">
	    <link href="assets/css/style-responsive.css" rel="stylesheet">

	    <link href="assets/css/table-responsive.css" rel="stylesheet">
			<link href="assets/css/jquery.bdt.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
							';
	return $panel;
}
function linkhead ($tipe ='', $link='') {
	if ($tipe=="js") {
		$isinye = '<script src="'.$link.'"</script>';
	}
	if ($tipe=="css") {
		$isinye = '<link href="'.$link.'" rel="stylesheet">';
	}
	return $isinye;
}

function tutuphead () {
	$tagnye = '
	</head>
	<body>';
	return $tagnye;
}

function bukafooter () {
	$tagnye = '

	<!--main content end-->
	<!--footer start-->
	<footer class="site-footer">
			<div class="text-center">
					2018 - '.app_name.'
					<a href="#" class="go-top">
							<i class="fa fa-angle-up"></i>
					</a>
			</div>
	</footer>
	<!--footer end-->
	</section>
	';
	return $tagnye;
}

function tutupfooter () {
	$tagnye = '
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
	<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


	<!--common script for all pages-->
	<script src="assets/js/common-scripts.js"></script>

</body>
</html>';
	return $tagnye;
}

 ?>
