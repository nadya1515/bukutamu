
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

	<div class="row" style="width:1350px;height:300px">
	<div class="col-12"> 

		<nav class="navbar navbar-expand-lg navbar-light bg-none " style="border-bottom: 1px solid #fff;">
		<img src="<?php echo base_url('assets/images/comport.png');?>" style="height:150px;width:300px">
	  	<!-- <a class="navbar-brand" href="#">Navbar</a> -->
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	 	 </button>
	  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active"  href="#" style="color:#fff">Home <span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link" id="menu" style="color:#fff" href="#">Kontak</a>
	    </div>
	  	</div>
		</nav>

		
		<center><h1>Hello fellas</h1></center>
		<h1 style="margin-top:-20px"> Welcome to Confortável Co-working space </h1>
		

	 </div>
	 </div>
   </div>

   	<div class="container-fluid" id="bg2">

	<div class="row" style="width:1370px;height:300px">
	<div class="col-12"> 

	<br>
	<br>
	<center><button type="button" class="btn btn-warning"><a href="<?php echo site_url('Main/tambah_data');?>"> <i class="fas fa-plus"></i> Add Data</a></center></button>
	<table class="table" id="data" border="1" style="width: 1200px;border-color: #fff;margin-left:70px">
		 <thead>
			<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Email</th>
			<th scope="col">Aktifitas</th>
			<th scope="col">Check In</th>
			<th scope="col">Check out</th>
			<th scope="col">Aksi</th>
			</tr>
		</thead>
		
		 <tfoot>
			<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Email</th>
			<th scope="col">Aktifitas</th>
			<th scope="col">Check In</th>
			<th scope="col">Check out</th>
			<th scope="col">Aksi</th>
			</tr>
		</tfoot>
		<?php 
			$no = 1;	
			foreach ($tamu as $tm) {
					
			
		?>
			<tbody>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $tm->nama;?></td>
				<td><?php echo $tm->email;?></td>
				<td><?php echo $tm->aktifitas;?></td>
				<td><?php echo $tm->check_in;?></td>
				<td>
					<?php 
						$tes = $tm->check_out;
						if($tes==""){
							echo "Belum Check Out || "; 
							?>
							<a href="<?php echo site_url('Main/checkout/');?><?php echo $tm->id_bukutamu;?>">  Check  Out</a> <?php 
						}else{ 
							
							echo $tes;
						
						} ?>
				</td>	
				<td>
					<a href="<?php echo site_url('Main/edit/');?><?php echo $tm->id_bukutamu;?>"><i class="fas fa-edit"></i>Edit</a> || <a href="<?php echo site_url('Main/delete/');?><?php echo $tm->id_bukutamu;?>"><i class="fas fa-trash"></i> Delete</a>
				</td>	
			</tr>
			  </tbody>
		<?php $no++; } ?>
				

	 </table>
	 </center>

	</div>
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