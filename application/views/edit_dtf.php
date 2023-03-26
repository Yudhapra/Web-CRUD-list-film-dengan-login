<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--ACCESS MENUS FOR ADMIN-->
<?php if($this->session->userdata('level')!=='1'){
	redirect('admin/film');}?>

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
	
    <title>Edit Data List Film</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="nav-link disabled" href="#">&emsp;</a>
		
        <a class="navbar-brand" href="<?= base_url('/admin/film') ?>"><b>&emsp;&emsp;&emsp; FILM &emsp;</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
				
				<!-- Ini Dropdown -->
				<div class="nav-item dropdown" style="text-align:center;">
					<a class="navbar-brand dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&emsp;<b>Tambah Film</b></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('/admin/film') ?>"><b>Tambah? 🗿</b></a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">Jangan lupa bahagia 😁</a>
					</div>
				</div>
				<!-- Sampe sini -->
				
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
				<!-- <div class="nav-item dropdown">
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
                <div class="card-title"><b><h2><center>
					Form Edit Data Film</b>
                </div>
            </div>
            <div class="card-body">

                <div class="container">


                    <form action="<?= base_url('admin/action_edit_dtf/').$film->id  ?>" method="post">

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Film &emsp;&emsp;&emsp;:</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama" class="form-control" id="nama" value="<?= $film->nama  ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun Rilis &emsp;&emsp;&emsp;:</label>
                        <div class="col-sm-10">
                          <input type="text" name="tahun" class="form-control" id="tahun" value="<?= $film->tahun  ?>">
                        </div>
                      </div>

                      <center><button class="btn btn-primary" type="submit" >Simpan</button>
                    
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