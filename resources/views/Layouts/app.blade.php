<!DOCTYPE html>
<html>
<head>
	<title>M2GTI- @yield('title')</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" 
	integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="/js/app.js"></script>
	<link rel="stylesheet" href="/css/app.css" >
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
		<a href="#" class="navbar-brand">Person@s</a>
	</nav>

	<div class="container">
		<div style="margin-top:5px">
			<h1 class="nav navbar-nav">@yield('title2')</h1>
		</div>
		
		@yield('content')

	</div>
</body>
</html>