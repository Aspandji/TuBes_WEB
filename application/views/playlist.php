<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Membuat player mp3 dengan boostrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->

    <link href="<?php echo base_url();?>assets/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" media="screen">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet" media="screen"> 
    <link href="<?php echo base_url();?>assets/css/bootstrap-playermusic.css" rel="stylesheet" media="screen"> 
  
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">

                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://andeznet.com">AndezNet</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#">Home</a></li>
        <li class="active"><a href="#">Music</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

  <div class="container">
    <audio controls
      data-info-album-art="<?php echo base_url();?>/images/logo.jpg"
      data-info-album-title="Musim Yg Baik"
      data-info-artist="Sheilaon7"
      data-info-title="Lapang Dada"
      data-info-label="Sony Music Indonesia"
      data-info-year="2015"
      data-info-att="Sheilaon7"
      data-info-att-link="http://sheilaon7.com">
      <source src="<?php echo base_url();?>/music/Sheila On 7 - Lapang Dada.mp3" type="audio/mpeg" />
    </audio>
    
  
  </div>

  <div class="row-fluid">
      <div class="span12">
        <div class="row-fluid">
        <div class="alert alert-info">
          <a name="contact"></a>
          <h2>www.andeznet.com</h2>
          <p class="text-info">Gudang Teknologi & Informasi</p>
          <p>&copy; <a href="http://andeznet.com">www.andeznet.com</a>&nbsp<?php echo date("Y");?></p>
        </div><!--/span-->
        </div><!--/row-->
      </div><!--/span-->
  </div><!--/row-->


    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-typeahead.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap-playermusic.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

  </body>
</html>