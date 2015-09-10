<?php include "specs.php"  ?>

	<head>
			<title> City Comparison </title>
			<link rel="stylesheet" type="text/css" href="style.css">
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
						<li><a href="about.html" class="selected"> About </a></li>
						<li><a href="contact.html"> Contact </a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="bodyContainer">
			<div class="item">
				<?php 
					if (strtoupper($city) === 'NEW YORK CITY') {
						echo "Name: " . $info['NEW YORK CITY']['Name'] . ".<br>";
						echo "Rank: " . $info['NEW YORK CITY']['Rank'] . ".<br>";
						echo "Population: " . $info['NEW YORK CITY']['Population'] . ".<br>";
						echo "Area: " . $info['NEW YORK CITY']['Area'] . ".<br>";
						echo "Time zone: " . $info['NEW YORK CITY']['Time zone'] . ".<br>";
					} 

					elseif (strtoupper($city) === 'LOS ANGELES') {
						echo "Name: " . $info['LOS ANGELES']['Name'] . ".<br>";
						echo "Rank: " . $info['LOS ANGELES']['Rank'] . ".<br>";
						echo "Population: " . $info['LOS ANGELES']['Population'] . ".<br>";
						echo "Area: " . $info['LOS ANGELES']['Area'] . ".<br>";
						echo "Time zone: " . $info['LOS ANGELES']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city) === 'CHICAGO') {
						echo "Name: " . $info['CHICAGO']['Name'] . ".<br>";
						echo "Rank: " . $info['CHICAGO']['Rank'] . ".<br>";
						echo "Population: " . $info['CHICAGO']['Population'] . ".<br>";
						echo "Area: " . $info['CHICAGO']['Area'] . ".<br>";
						echo "Time zone: " . $info['CHICAGO']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city) === 'HOUSTON') {
						echo "Name: " . $info['HOUSTON']['Name'] . ".<br>";
						echo "Rank: " . $info['HOUSTON']['Rank'] . ".<br>";
						echo "Population: " . $info['HOUSTON']['Population'] . ".<br>";
						echo "Area: " . $info['HOUSTON']['Area'] . ".<br>";
						echo "Time zone: " . $info['HOUSTON']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city) === 'PHILADELPHIA') {
						echo "Name: " . $info['PHILADELPHIA']['Name'] . ".<br>";
						echo "Rank: " . $info['PHILADELPHIA']['Rank'] . ".<br>";
						echo "Population: " . $info['PHILADELPHIA']['Population'] . ".<br>";
						echo "Area: " . $info['PHILADELPHIA']['Area'] . ".<br>";
						echo "Time zone: " . $info['PHILADELPHIA']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city) === 'PHOENIX') {
						echo "Name: " . $info['PHOENIX']['Name'] . ".<br>";
						echo "Rank: " . $info['PHOENIX']['Rank'] . ".<br>";
						echo "Population: " . $info['PHOENIX']['Population'] . ".<br>";
						echo "Area: " . $info['PHOENIX']['Area'] . ".<br>";
						echo "Time zone: " . $info['PHOENIX']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city) === 'SAN ANTONIO') {
						echo "Name: " . $info['SAN ANTONIO']['Name'] . ".<br>";
						echo "Rank: " . $info['SAN ANTONIO']['Rank'] . ".<br>";
						echo "Population: " . $info['SAN ANTONIO']['Population'] . ".<br>";
						echo "Area: " . $info['SAN ANTONIO']['Area'] . ".<br>";
						echo "Time zone: " . $info['SAN ANTONIO']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city) === 'SAN DIEGO') {
						echo "Name: " . $info['SAN DIEGO']['Name'] . ".<br>";
						echo "Rank: " . $info['SAN DIEGO']['Rank'] . ".<br>";
						echo "Population: " . $info['SAN DIEGO']['Population'] . ".<br>";
						echo "Area: " . $info['SAN DIEGO']['Area'] . ".<br>";
						echo "Time zone: " . $info['SAN DIEGO']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city) === 'DALLAS') {
						echo "Name: " . $info['DALLAS']['Name'] . ".<br>";
						echo "Rank: " . $info['DALLAS']['Rank'] . ".<br>";
						echo "Population: " . $info['DALLAS']['Population'] . ".<br>";
						echo "Area: " . $info['DALLAS']['Area'] . ".<br>";
						echo "Time zone: " . $info['DALLAS']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city) === 'SAN JOSE') {
						echo "Name: " . $info['SAN JOSE']['Name'] . ".<br>";
						echo "Rank: " . $info['SAN JOSE']['Rank'] . ".<br>";
						echo "Population: " . $info['SAN JOSE']['Population'] . ".<br>";
						echo "Area: " . $info['SAN JOSE']['Area'] . ".<br>";
						echo "Time zone: " . $info['SAN JOSE']['Time zone'] . ".<br>";	
					}

					else {
						echo "Incorrect input.";
					}
				?>
			</div>

			<div class="item">
				<h3> vs </h3>
			</div>

			<div class="item">
				<?php 
					if (strtoupper($city2) === 'NEW YORK CITY') {
						echo "Name: " . $info['NEW YORK CITY']['Name'] . ".<br>";
						echo "Rank: " . $info['NEW YORK CITY']['Rank'] . ".<br>";
						echo "Population: " . $info['NEW YORK CITY']['Population'] . ".<br>";
						echo "Area: " . $info['NEW YORK CITY']['Area'] . ".<br>";
						echo "Time zone: " . $info['NEW YORK CITY']['Time zone'] . ".<br>";
					} 

					elseif (strtoupper($city2) === 'LOS ANGELES') {
						echo "Name: " . $info['LOS ANGELES']['Name'] . ".<br>";
						echo "Rank: " . $info['LOS ANGELES']['Rank'] . ".<br>";
						echo "Population: " . $info['LOS ANGELES']['Population'] . ".<br>";
						echo "Area: " . $info['LOS ANGELES']['Area'] . ".<br>";
						echo "Time zone: " . $info['LOS ANGELES']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city2) === 'CHICAGO') {
						echo "Name: " . $info['CHICAGO']['Name'] . ".<br>";
						echo "Rank: " . $info['CHICAGO']['Rank'] . ".<br>";
						echo "Population: " . $info['CHICAGO']['Population'] . ".<br>";
						echo "Area: " . $info['CHICAGO']['Area'] . ".<br>";
						echo "Time zone: " . $info['CHICAGO']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city2) === 'HOUSTON') {
						echo "Name: " . $info['HOUSTON']['Name'] . ".<br>";
						echo "Rank: " . $info['HOUSTON']['Rank'] . ".<br>";
						echo "Population: " . $info['HOUSTON']['Population'] . ".<br>";
						echo "Area: " . $info['HOUSTON']['Area'] . ".<br>";
						echo "Time zone: " . $info['HOUSTON']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city2) === 'PHILADELPHIA') {
						echo "Name: " . $info['PHILADELPHIA']['Name'] . ".<br>";
						echo "Rank: " . $info['PHILADELPHIA']['Rank'] . ".<br>";
						echo "Population: " . $info['PHILADELPHIA']['Population'] . ".<br>";
						echo "Area: " . $info['PHILADELPHIA']['Area'] . ".<br>";
						echo "Time zone: " . $info['PHILADELPHIA']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city2) === 'PHOENIX') {
						echo "Name: " . $info['PHOENIX']['Name'] . ".<br>";
						echo "Rank: " . $info['PHOENIX']['Rank'] . ".<br>";
						echo "Population: " . $info['PHOENIX']['Population'] . ".<br>";
						echo "Area: " . $info['PHOENIX']['Area'] . ".<br>";
						echo "Time zone: " . $info['PHOENIX']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city2) === 'SAN ANTONIO') {
						echo "Name: " . $info['SAN ANTONIO']['Name'] . ".<br>";
						echo "Rank: " . $info['SAN ANTONIO']['Rank'] . ".<br>";
						echo "Population: " . $info['SAN ANTONIO']['Population'] . ".<br>";
						echo "Area: " . $info['SAN ANTONIO']['Area'] . ".<br>";
						echo "Time zone: " . $info['SAN ANTONIO']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city2) === 'SAN DIEGO') {
						echo "Name: " . $info['SAN DIEGO']['Name'] . ".<br>";
						echo "Rank: " . $info['SAN DIEGO']['Rank'] . ".<br>";
						echo "Population: " . $info['SAN DIEGO']['Population'] . ".<br>";
						echo "Area: " . $info['SAN DIEGO']['Area'] . ".<br>";
						echo "Time zone: " . $info['SAN DIEGO']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city2) === 'DALLAS') {
						echo "Name: " . $info['DALLAS']['Name'] . ".<br>";
						echo "Rank: " . $info['DALLAS']['Rank'] . ".<br>";
						echo "Population: " . $info['DALLAS']['Population'] . ".<br>";
						echo "Area: " . $info['DALLAS']['Area'] . ".<br>";
						echo "Time zone: " . $info['DALLAS']['Time zone'] . ".<br>";	
					}

					elseif (strtoupper($city2) === 'SAN JOSE') {
						echo "Name: " . $info['SAN JOSE']['Name'] . ".<br>";
						echo "Rank: " . $info['SAN JOSE']['Rank'] . ".<br>";
						echo "Population: " . $info['SAN JOSE']['Population'] . ".<br>";
						echo "Area: " . $info['SAN JOSE']['Area'] . ".<br>";
						echo "Time zone: " . $info['SAN JOSE']['Time zone'] . ".<br>";	
					}

					else {
						echo "Incorrect input.";
					}
				?>
			</div>
		</div>

	</body>

