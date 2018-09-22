<!DOCTYPE html>
<html>
<head>
	<title>BigEvent</title>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-Control" CONTENT="no-cache">
 	<meta http-equiv="Pragma" CONTENT="no-cache">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/encabezado.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxFjMnoVbsfC34PSRBKfM9DRA_rnYp6zw&libraries=geometry"
        async defer></script>
        <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
@yield('header')

@yield('scripts')
<script type="text/javascript">
	$('.header').click(function(){
		alert('llego')
	});
</script>

</body>
</html>