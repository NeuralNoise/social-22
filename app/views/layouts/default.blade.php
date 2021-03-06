<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	<title>Title</title>

	{{-- CSS files --}}
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	@include('layouts.partials.nav')

	<div class="container">
		@yield('content')
	</div>

	{{-- JS files --}}
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>