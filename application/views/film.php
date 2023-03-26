<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--ACCESS MENUS FOR GUEST-->
<?php if($this->session->userdata('level')=='3'){
	redirect('admin/data');}?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/bootstrap.min.css">
	<!-- Script buat Dropdown -->
    <script src="<?= base_url('assets') ?>/js/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
	<!-- Script nya sampe sini -->
	
    <title>Data List Film</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="nav-link disabled" href="#">&emsp;</a>
		
        <a class="navbar-brand" href="#"><b>&emsp;&emsp;&emsp; FILM &emsp;</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
				
				
				<!-- Ini Dropdown -->
				<div class="nav-item dropdown" style="text-align:center;">
					<a class="navbar-brand dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&emsp;<b>List Film</b></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('/admin/data') ?>"><b>Lihat List? 🗿</b></a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">Jangan lupa puasanya! 😉</a>
					</div>
				</div>
				<!-- Sampe sini -->
				
				
				<!-- Ini Dropdown -->
			<!-- 	<div class="nav-item dropdown">
					<a class="navbar-brand dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&emsp;Cooming Soon!</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('/admin') ?>">Blank? 🗿🤷‍</a>
						<div class="dropdown-divider"></div>
					</div>
				</div> -->
				<!-- Sampe sini -->
				
				<a style="text-align: center;" class="nav-link" href="#">|&ensp;&emsp;&emsp;<b>--- &emsp; Hai, <?php echo $this->session->userdata('username');?> 👋&ensp;&ensp; ---</b>&ensp;&emsp;&emsp;|</a>
                <a class="btn btn-danger" href="<?php echo site_url('login/logout');?>"><b>&ensp;&emsp; Log Out 🗿 &emsp;&ensp;</b></a>
            </div>			
        </div>
    </nav>
    
    <div class="container">

        <div class="card mt-5">
            <div class="card-header">
                <div class="card-title"><b><h2><center> Form Film Tertonton</b>
                </div>
            </div>
            <div class="card-body">

                <div class="container">
       
                <?php if ($this->session->flashdata('sukses')) { ?>
                    <div class="alert alert-success"> <?= $this->session->flashdata('sukses') ?> </div>
	              <?php } ?>


                    <form action="<?= base_url('admin/tambahFilm')  ?>" method="post">

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Film &nbsp;&nbsp;&thinsp;&thinsp;:</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama" class="form-control" id="nama" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun Rilis &emsp;:</label>
                        <div class="col-sm-10">
                          <select name="tahun" class="form-control" id="tahun" onfocus='this.size=10;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
							<option value="">-</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option></select>
                        </div>
                      </div>
					  

                      <center><button class="btn btn-primary" type="submit"><b>Simpan</b></button>
					  
					  <a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input class="btn btn-secondary" type="reset" value="&ensp;Clear&ensp;">
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

	<b><p class="nav-link"></br><center>Created by <a href="https://github.com/yudhapra"  target="_blank" rel="noopener noreferrer">Yudha Prasetyo</a></center></p></b>

    <script src="<?= base_url('assets') ?>/js/jquery-3.5.1.slim.min.js">
    </script>
    <script src="<?= base_url('assets') ?>/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>