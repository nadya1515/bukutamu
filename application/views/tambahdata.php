
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/css/jquery.dataTables.min.css');?>" />  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/css/jquery.dataTables.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/css/dataTables.bootstrap.css');?>">


	<title>Buku Tamu</title>
</head>

<body>

  <div class="container-fluid">
  	<div class="row " style="margin-top:-100px">
  	<div class="col-12" >
  	<h1>Please fill this guest book form</h1>
  	</div>
    </div>
   <div class="row">
   <div class="col-md-4"> </div>
   <div class="col-md-4">
        <div class="jumbotron" style="background: rgba(204, 204, 204, 0.5);">
        	 <div class="form-row">
                  <form method="POST" action="<?php echo site_url('Main/proses_tambahdata')?>">
                  <label for="validationTooltipUsername">Nama</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Nama Lengkap" aria-describedby="validationTooltipUsernamePrepend" name="nama" required>
                 
                    </div>

                    <label for="validationTooltipUsername">Email</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend" name="email" required>
                 
                    </div>

                  

                    <label for="validationTooltipUsername">Aktifitas</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-tasks"></i></span>
                      </div>
                      <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Aktifitas" aria-describedby="validationTooltipUsernamePrepend" name="aktifitas" required>
                    </div>

                    <button type="submit" name="proses_tambahdata" class="btn btn-success">Check In</button>
                </form>
              </div>

		</div>
	 </div>
	<div class="col-md-4"> </div>
   </div>
   </div>

   	

    <div style="float:left">&copy; <?php echo date("Y"); ?> Code Fun</div>
	<div style="float:right">sitemaps | privacy policy</div>

	

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min.js');?>"></script>
       <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/DataTables/js/jquery.dataTables.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/DataTables/js/dataTables.bootstrap.js');?>"></script>
 
    
  
    
    <script>
    $(document).ready(function () {
     $('#data').DataTable();
      });
    </script>

</body>
</html>










