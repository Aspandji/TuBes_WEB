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
  			<a class="navbar-brand" href="#">MusikKU</a>
  		</div>
  
  		<!-- Collect the nav links, forms, and other content for toggling -->
  		<div class="collapse navbar-collapse navbar-ex1-collapse">
  			<ul class="nav navbar-nav">
  				<li class="active"><a href="<?php echo site_url()?>/home">Daftar Musik</a></li>
          <li class=""><a href="<?php echo site_url()?>/home/playlist">Play List</a></li>
          <li><a href="<?php echo site_url()?>/Login/logout">Logout</a></li>
          
  			</ul>

  			
  				</li>
  			</ul>
  		</div><!-- /.navbar-collapse -->
  	</div>
  </nav>
  <div class="container">
      <h1>Daftar Menu</h1>
    </div>
          <table class="table table-hover">
            <thead>
              <tr>
            <th>No</th>   
            <th>Artist</th>
            <th>Lagu</th>
            <th>Genre</th>
            <th>Album</th>
            <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($musik_list as $key => $value): ?>
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['artist'] ?></td>
              <td><?php echo $value['lagu'] ?></td>
              <td><?php echo $value['genre'] ?></td>
              <td>
                  <img src="<?php echo base_url()?>assets/img/<?php echo $value['album']; ?>" width="90" height="90"/> 
            </td>
              <td>
                <a href="<?php echo base_url("index.php/menu/update/".$value['id']) ?>"><button type="button" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-pencil"></span> Update</button></a>
                <a href="<?php echo base_url("index.php/menu/delete/".$value['id']) ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button></a>
              </td>
            </tr>
            
          <?php endforeach ?>
                       
            </tbody>
  	     </table>
          <p>
        <a href="<?php echo base_url("index.php/home/create/ ")?>"><button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-plus"></span> Tambah Musik
    </button></a>
      </p>
       </div>
</body>
</html>