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
          <div class="nav-collapse collapse">
            <ul class="nav">
             <li class=""><a href="<?php echo site_url()?>/home">Home</a></li>
          <li class=""><a href="<?php echo site_url()?>/home/daftarmusik">Daftar Musik</a></li>
          <li class="active"><a href="<?php echo site_url()?>/home/playlist">Play List</a></li>
           <li class=""><a href="<?php echo site_url()?>/home/download">Download</a></li>
          <li class=""><a href="<?php echo site_url()?>/home/contact">Contact Us</a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

  <div class="container">
    <audio controls
      data-info-album-art="<?php echo base_url();?>assets/img/rebelution.png"
      data-info-album-title="Peace"
      data-info-artist="Rebelution"
      data-info-title="Safe_and_Sound"
      data-info-year="2005"
      >
      <source src="<?php echo base_url();?>/assets/img/Rebelution_-_Safe_and_Sound.mp3" type="audio/mpeg" />
    </audio>
  </div>

  <div class="container">
    <audio controls
      data-info-album-art="<?php echo base_url();?>assets/img/lagu-gratis-slank-terlalu-pahit-mp3.png"
      data-info-album-title="Lagi Sedih"
      data-info-artist="Slank"
      data-info-title="Terlalu_Pahit"
      data-info-year="2015"
      >
      <source src="<?php echo base_url();?>/assets/img/Slank_-_Terlalu_Pahit.mp3" type="audio/mpeg" />
    </audio>
  </div>

  <div class="container">
    <audio controls
      data-info-album-art="<?php echo base_url();?>assets/img/lagu-gratis-slank-terlalu-pahit-mp3.png"
      data-info-album-title="Lagi Sedih"
      data-info-artist="Slank"
      data-info-title="Terlalu_Manis"
      data-info-year="2010"
      >
      <source src="<?php echo base_url();?>/assets/img/Slank-Terlalu-Manis.mp3" type="audio/mpeg" />
    </audio>
  </div>

  


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