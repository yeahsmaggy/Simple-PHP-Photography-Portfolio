<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>title...."</title>
		<meta name="description" content="description...">
		<meta name="keywords" content="keywords...">
		<?php $author = 'Author name'; print $header ? $header : ''; ?>
		<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
		<meta name="DC.Title" content="title....">
		<meta name="DC.Creator" content="author....">
		<meta name="DC.Description" content="description...">
		<meta name="DC.Date" content="2013">
		<meta name="DC.Type" content="Website">
		<meta name="DC.Rights" content="All Rights Reserved">
		<meta property="og:title" content="title...."/>
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://<?php print $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"] ?>"/>
		<meta property="og:site_name" content="www.yourdomain.co.uk">
		<meta property="og:description" content="description...">
		<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/styles.css" rel="stylesheet">
		<script src="/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="/js/custom.js"></script>
	</head>
	<body>
		<div class="container">
			<!-- Static navbar -->
			<div class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Site title</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/page/">Photo page</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Another Category <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/content-page/">Content page</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/artist-statement/">Artist Statement</a></li>
						<!-- <li><a href="/blog/">Blog</a></li>
						-->
						<li><a href="/services/">Services</a></li>
						<li class="active"><a href="mailto:your_email@domain.com">Contact</a></li>
					</ul>
				</div>
				<a id="previmg" style="width:100px;height:20px;display:block;float:left;color:#777;cursor:pointer;"><span class="glyphicon glyphicon-chevron-left" style="float:left;"></span></a>
				<a id="nextimg" style="width:100px;height:20px;display:block;float:right;color:#777;cursor:pointer;"><span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a>
			</div>