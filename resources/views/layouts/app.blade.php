<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="assets/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Boombest Store</title>
	<!--CSS============================================= -->
    @extends('url.css')
</head>

<body>
	<!-- Start Header Area -->
	@extends('item.navbar')
	<!-- End Header Area -->

    {{-- banner start --}}
    @yield('banner')
    {{-- banner end --}}

    {{-- content start --}}
    @yield('content')
    {{-- content end --}}



	<!-- start footer Area -->
	@extends('item.footer')
	<!-- End footer Area -->

	@extends('url.script')
</body>

</html>