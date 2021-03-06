<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Rytefoot </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link href="/assets/css/less/bootstrap.less" type="text/css" rel="stylesheet/less">
		<link href="/assets/css/less/bootstrap-responsive.less" type="text/css" rel="stylesheet/less">
		<script src="/assets/javascript/less-1.3.0.min.js" type="text/javascript"></script>

		<!--<link href="/assets/css/bootstrap.css" rel="stylesheet">-->
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		<!--<link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">-->

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link rel="shortcut icon" href="../assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	</head>

	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#">Rytefoot</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="/">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">

<?

	echo "<pre>";
	print_r($this->session->all_userdata());
	echo "</pre>";

?>