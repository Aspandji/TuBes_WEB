  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Title</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../">Daftar Pegawai</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <?php echo form_open ('home/update/' .$this->uri->segment(3)); ?>  
  <legend>Tambah Data Pegawai</legend>
  <?php echo validation_errors(); ?>
  <div class="form-group">
    <label for="">Artist</label>
    <input type="text" class="form-control" name="artist" value="<?php echo $home[0]->artist ?>" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Lagu</label>
    <input type="text" class="form-control" name="lagu" value="<?php echo $home[0]->lagu ?>" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Genre</label>
    <input type="text" class="form-control" name="genre" value="<?php echo $home[0]->genre ?>" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="">Album</label>
    <input type="file" name="userfile" size="20" />
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
  <?php echo form_close(); ?>
</div>
</div>

