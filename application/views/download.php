<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">
  <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();
    });
  </script>
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
          <li class=""><a href="<?php echo site_url()?>/home/daftarmusik">Daftar Musik</a></li>
          <li class=""><a href="<?php echo site_url()?>/home/playlist">Play List</a></li>
           <li class="active"><a href="<?php echo site_url()?>/home/download">Download</a></li>
          <li class=""><a href="<?php echo site_url()?>/home/contact">Contact Us</a></li>
      </ul>
       <div class="nav navbar-right">
        <a href="<?php echo site_url()?>/Login/logout"><button type="button" class="btn btn-danger navbar-btn dropdown-toggle button-login"">LogOut</button></a>
       </div>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
    <div class="page-header">
          <h1>Download</h1>
    </div>
</div>

<div class="container">
<div class="panel panel-default">
    <table class="table table-striped table-hover" id="example">
          <thead>
              <tr>
            <th>No</th>   
            <th>Artist</th>
            <th>Lagu</th>
            <th>Action</th>
              </tr>
            </thead>
          <tbody>
            <?php foreach ($musik_list as $key => $value): ?>
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['artist'] ?></td>
              <td><?php echo $value['lagu'] ?></td>
              <td>
                <a href="<?php echo base_url("/home/do_download/".$value['file_lagu']) ?>"><button type="button" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-cloud-download"></span> Download</button></a>
              </td>
            </tr>
            
          <?php endforeach ?>
                       
            </tbody>
        </table>
        </div>
</div>



<style>
  body { padding-top: 40px; }
</style>