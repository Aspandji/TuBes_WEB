






  
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">Something else here</a></li>
            </ul>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
          </li>
          <li class="active"><a href="../">Daftar Pegawai</a></li>
          <li class="dropdown">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="sr-only">Toggle navigation</span>
        </button>
        </ul>
        </ul>
        <a class="navbar-brand" href="#">Title</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav">
      <!-- Brand and toggle get grouped for better mobile display -->
      <!-- Collect the nav links, forms, and other content for toggling -->
      </div>
      </div><!-- /.navbar-collapse -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
      <div class="navbar-header">
    </div>

  <?php echo form_open ('home/update/' .$this->uri->segment(3)); ?>  
  <?php echo validation_errors(); ?>
  <button type="submit" class="btn btn-primary">Tambah</button>
  
  <div class="form-group">
  <div class="form-group">
  <div class="form-group">
  <legend>Tambah Data Pegawai</legend>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="container">
    <div class="container-fluid">
  

   <input type="file" name="userfile" size="20" />
    <div class="form-group">
      
    <input type="text" class="form-control" name="artist" value="<?php echo $home[0]->artist ?>" placeholder="Input field">
    <input type="text" class="form-control" name="genre" value="<?php echo $home[0]->genre ?>" placeholder="Input field">
    <input type="text" class="form-control" name="lagu" value="<?php echo $home[0]->lagu ?>" placeholder="Input field">
    <label for="">Album</label>
    <label for="">Artist</label>
    <label for="">Genre</label>
    <label for="">Lagu</label>
    <?php echo form_close(); ?>
  </div>
  </div>
  </div>
  </div>
  </nav>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <nav class="navbar navbar-default" role="navigation">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</div>
</div>