
<?php
    $db = mysqli_connect('localhost','root','','avion');
?>

<html>

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Avion &mdash; </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
body {
    font-family: Georgia, serif;
	color: white;
	background-color: black;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
	border-radius: 12px;
}

.button:hover {
    background-color: #4CAF50;
    color: white;
	border-radius: 12px;
}


table {
    border-collapse: collapse;
    width: 70%;
}

th{
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	font-size: 20px;
	color: DodgerBlue;
    padding: 10px;
    text-align: left;
    border-bottom: 5px solid #d8d8d8;	
}

td {
    padding: 8px;
    text-align: left;
    border-bottom: 5px solid #ddd;
}
</style>
</head>
	
<body>
<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Avion <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="destination.html">Destination</a></li>
						<li class="has-dropdown">
							<a href="#">Travel</a>
							<ul class="dropdown">
								<li><a href="#">North India</a></li>
								<li><a href="#">Seven Sisters</a></li>
								<li><a href="#">South India</a></li>
								<li><a href="#">Islands</a></li>
							</ul>
						</li>
						<li><a href="pricing.html">Pricing</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
<br><br><br><br>
	
<table align='center'>
  <tr>
    <th>NAME</th>
    <th>ARRIVAL</th> 
    <th>DEPARTURE</th>
	<th>AVERAGE DELAY</th>
	<th>PRICE</th>
	<th></th>
  </tr>
  
			<?php
			if($_POST['se']==1)
			$search='price';
			else if($_POST['se']==2)
			$search='tod';
			else if($_POST['se']==3)
				$search='toa';
			else if($_POST['se']==4)
					$search='avg_delay';
					
				$query = "SELECT * FROM origin ORDER BY $search;";
                $result = mysqli_query($db, $query);
				while($row = mysqli_fetch_array($result)) {	
				
	echo "<tr>";
	
    echo "<td>";
        
		echo $row['name'].'<br>';
	echo "</td>";
	
	echo "<td>";
		echo $row['tod'].'<br>';
	echo "</td>";
	
	echo "<td>";
		echo $row['toa'].'<br>';
	echo "</td>";
	
	echo "<td>";
		echo $row['avg_delay'].'<br>';
	echo "</td>";
    
	echo "<td>";
		echo $row['price'].'<br>';
	echo "</td>";
	
	echo "<td>";
	echo "<form action='bdetails.php'>";
		echo "<button class='button' >Book</button>";
		echo "</form>";
	echo "</td>";
	
  echo '</tr>';
	
}?>
  
</table>
</div>
<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

</body>
</html>