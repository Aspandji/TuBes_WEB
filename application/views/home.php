<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TUBES</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
  .navbar-inverse {
    background-color: #D8D8D8;
    border-color: #3F51B5;;
}
</style>
<body>
	 <div class="container">
  <nav class="navbar navbar-inverse" role="navigation">
  	<div class="container-fluid">
  		<!-- Brand and toggle get grouped for better mobile display -->
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  			<a class="navbar-brand" href="#">Latihan</a>
  		</div>
  
  		<!-- Collect the nav links, forms, and other content for toggling -->
  		<div class="collapse navbar-collapse navbar-ex1-collapse">
  			<ul class="nav navbar-nav">
  				<li class="active"><a href="<?php echo site_url()?>/home_menu">Daftar Menu</a></li>
          <li class=""><a href="<?php echo site_url()?>/menu">Edit Menu</a></li>
          <li><a href="<?php echo site_url()?>/Login/logout">Logout</a></li>
          
  			</ul>

  			
  				</li>
  			</ul>
  		</div><!-- /.navbar-collapse -->
  	</div>
  </nav>
  	
</body>
</html>