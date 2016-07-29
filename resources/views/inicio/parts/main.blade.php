<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | RB</title>
	@include('inicio.parts.header')
</head>
<body>
	
	<article>
		@yield('article')
	</article>
	
	@include('inicio.parts.footer')
</body>
</html>