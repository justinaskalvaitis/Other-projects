<!DOCTYPE html>
<html>
<head>
	<title>3wa Laravel</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	nav li {
		display: inline-block;
		padding: 10px;
		margin-top: 10px;
	}
</style>
</head>
<body>

<div class="container">
	<nav class=" navbar navbar-default ">
	
		    <ul class="nav-justified">
		    	<li><a class="navbar-brand" href="/">Home</a></li>
		    	<li class="dropdown"><a class="navbar-brand dropdown-toggle4" href="/categories">Kategorijos</a></li>
		    	<li><a class="navbar-brand " href="">Gamintojas</a></li>
		    	<li><a class="navbar-brand" href="/products">Produktai</a></li>
		    </ul>
		
	</nav>
</div>
	<div class="container">
		@yield('content')

	</div>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>