		<head>
			<title> City Comparison </title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" type="text/css" href="responsive.css">
			<link href='https://fonts.googleapis.com/css?family=Pacifico|Bree+Serif' rel='stylesheet' type='text/css'>
		</head>

	<body class="wrapper">

		<header class="headContainer">
			<div class="headItem">
				<a href="index.php" id="logo">
					<h1> City Comparison </h1>
				</a>
			</div>

			<div class="headItem">
				<nav>
					<ul>
						<li><a href="https://twitter.com/1_rons" target="_blank" class="selected"><img src="twitter.png" class="img" alt="Twitter"/> </a></li>
						<li><a href="https://www.linkedin.com/pub/rony-alvarez/b6/a7/a1a" target="_blank"><img src="linkedin.png" class="img" alt="Linkedin"/> </a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="bodyContainer">
			<div class="item">
				<form action="specs.php" method="post" class="ajax">
					<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
						<div class="box">
						  <div class="container-4">
						    <input type="search" name="city" id="search" placeholder="Search..." />
						    <!--<input type="search" id="search" placeholder="Search..." />-->
						    <button class="icon"><i class="fa fa-search"></i></button>
						  </div>
						</div>

						<!--<div class="box">
						  <div class="container-1">
						    <span class="icon"><i class="fa fa-search"></i></span>
						    <input type="text" name="city" id="search" list="suggestions" placeholder="Search..." />
						    <datalist id="suggestions">
								<option value="New York City">
								<option value="Los Angeles">
								<option value="Chicago">
								<option value="Houston">
								<option value="Philadelphia">
								<option value="Phoenix">
								<option value="San Antonio">
								<option value="San Diego">
								<option value="Dallas">
								<option value="San Jose">
							</datalist>
						  </div>
						  	
						</div>
							<input type="submit" value="Send" class="fsSubmitButton"/>
						<!--
						<input type="text" name="city" list="suggestions" />
							<datalist id="suggestions">
								<option value="New York City">
								<option value="Los Angeles">
								<option value="Chicago">
								<option value="Houston">
								<option value="Philadelphia">
								<option value="Phoenix">
								<option value="San Antonio">
								<option value="San Diego">
								<option value="Dallas">
								<option value="San Jose">
							</datalist>
						<input type="submit" value="Send"> -->
				</form>
			</div>

			<div class="item">
				<h3> vs </h3>
			</div>

			<div class="item">
				<form action="specs.php" method="post" class="ajax2">	
						<div class="box">
						  <div class="container-4">
						    <input type="search" name="city" id="search" placeholder="Search..." />
						    <!--<input type="search" id="search" placeholder="Search..." />-->
						    <button class="icon"><i class="fa fa-search"></i></button>
						  </div>
						</div>

						<!--<div class="box">
						  <div class="container-1">
						    <span class="icon"><i class="fa fa-search"></i></span>
						    <input type="text" name="city" id="search" list="suggestions" placeholder="Search..." />
						    <datalist id="suggestions">
								<option value="New York City">
								<option value="Los Angeles">
								<option value="Chicago">
								<option value="Houston">
								<option value="Philadelphia">
								<option value="Phoenix">
								<option value="San Antonio">
								<option value="San Diego">
								<option value="Dallas">
								<option value="San Jose">
							</datalist>
						  </div>
						</div>

							<input type="submit" value="Send" class="fsSubmitButton"/>
						<!--
						<input type="text" name="city" list="suggestions" />
							<datalist id="suggestions">
								<option value="New York City">
								<option value="Los Angeles">
								<option value="Chicago">
								<option value="Houston">
								<option value="Philadelphia">
								<option value="Phoenix">
								<option value="San Antonio">
								<option value="San Diego">
								<option value="Dallas">
								<option value="San Jose">
							</datalist>
						<input type="submit" value="Send"> -->
				</form>
			</div>

		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="main.js"></script>
	</body>




