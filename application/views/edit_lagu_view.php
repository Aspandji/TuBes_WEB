  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MusikKU</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo site_url()?>/home">Home</a></li>
          <li class="active"><a href="<?php echo site_url()?>/home/daftarmusik">Daftar Musik</a></li>
          <li class=""><a href="<?php echo site_url()?>/home/playlist">Play List</a></li>
      </ul>
       <div class="nav navbar-right">
        <a href="<?php echo site_url()?>/Login/logout"><button type="button" class="btn btn-danger navbar-btn dropdown-toggle button-login"">LogOut</button></a>
       </div>
    </div><!--/.nav-collapse -->
  </div>
</div>
<br>
<br>
<br>
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <?php echo form_open_multipart('home/update/'.$this->uri->segment(3)); ?>
  <legend>Tambah Data Musik</legend>
  <?php echo validation_errors(); ?>
  <div class="form-group">
    <label for="">Artist</label>
    <input type="text" class="form-control" name="artist" value="<?php echo $musik[0]->artist ?>" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Lagu</label>
    <input type="text" class="form-control" name="lagu" value="<?php echo $musik[0]->lagu ?>" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Genre</label>
    <input type="text" class="form-control" name="genre" value="<?php echo $musik[0]->genre ?>" placeholder="Input field">
  </div>

  <br>
  <button type="submit" class="btn btn-primary" id="submit" value="upload" name="go_upload">Tambah</button>
  <?php echo form_close(); ?>
</div>
</div>
</div>

