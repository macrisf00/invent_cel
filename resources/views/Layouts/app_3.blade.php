<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" 
	integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a href="#" class="navbar-brand">INVENT_CEL</a>
				
				<div class="collapse navbar-collapse" id="navbarNav">
				  <ul class="navbar-nav">
					<li class="nav-item active">
					  <a class="nav-link" href="#">inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#">Productos</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Locales</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Movimientos</a>
                      </li>
					<li class="nav-item">
					  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
				  </ul>
				</div>
			  
			  
	</nav>

	<div class="container">
        <div style="background-color:#2E86C1; color:#FDFEFE; margin-top:5px">
            <div align='center'>
            <h1 class="nav navbar-nav">@yield('title2')</h1>
            </div>
		</div>
		
		@yield('content')

	</div>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
     -->
 
</body>
</html>