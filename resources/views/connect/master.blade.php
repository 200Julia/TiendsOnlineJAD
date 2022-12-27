<!DOCTYPE html>
<html>
<head>
	<title>MyCsm - @yield ('title')</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <link rel="stylesheet" href="{{url ('/static/css/connect.css?v='.time())}}">
            
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>
</head>
<body>

    @section ('content')
    hola fifi
    @show 
</body>
</html>