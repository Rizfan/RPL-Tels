<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>

@include('includes.styles')


<body>
@yield('css')

@include('includes.navbar2')
<div class="spacer3"></div>
@yield('content')


<div class="spacer"></div>

@include('includes.footer')
@include('includes.script')
</body>
</html>