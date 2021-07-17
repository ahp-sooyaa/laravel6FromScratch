<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Hielo by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
		{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"> --}}
		@yield('head')
		<link rel="stylesheet" href="../../assets/css/main.css"/>
	</head>
	<body>
		<!-- Header -->
		<header id="header" class="alt">
			<div class="logo"><a href="index.html">Hielo <span>by TEMPLATED</span></a></div>
			<a href="#menu">Menu</a>
		</header>
    	<!-- Nav -->
        <nav id="menu">
            <ul class="links">
				<li><a class="{{ Request::path() === 'welcome' ? 'active-menu' : '' }}" href="/home">Home</a></li>
                <li><a class="{{ Request::path() === 'about' ? 'active-menu' : '' }}" href="/about">About Us</a></li>
				<li><a class="{{ Request::path() === 'articles' ? 'active-menu' : '' }}" href="/articles">Articles</a></li>
				<li><a class="{{ Request::path() === 'contact' ? 'active-menu' : '' }}" href="/contact">Contact Us</a></li>
            </ul>
        </nav>
			
		@yield('content')

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
	</body>
</html>