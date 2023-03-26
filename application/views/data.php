<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
	<style> th {cursor: pointer;} </style> <!-- dikasih style <th> biar bisa pake function Sort -->
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

                <!-- ACCESS MENUS FOR GUEST -->
                <?php if($this->session->userdata('level')!=='3'):?>
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
                <?php endif;?>
					
				<!-- Ini Dropdown -->
				<!-- <div class="nav-item dropdown">
					<a class="navbar-brand dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&emsp;Cooming Soon!</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('/admin') ?>">Blank? 🤷‍</a>
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
                <div class="card-title">
                    <h3><b><center>Data Film Tertonton</b>
                </div>
            </div><h6><center><marquee>List Film Tertonton by <a href="https://github.com/yudhapra"  target="_blank" rel="noopener noreferrer">Yudhapra</a></marquee>
            <div class="card-body">
                <div class="container">

                <!-- menambahkan notofikasi flasdata jika berhasil edit data -->
                <?php if ($this->session->flashdata('sukses')) { ?>
                    <div class="alert alert-success"> <?= $this->session->flashdata('sukses') ?> </div>
	              <?php } ?>
       
						<!-- dikasih id=myTable biar bisa pake function Sort -->
                        <table id="myTable" class="table table-bordered">
                            <thead>

                                <tr>
                                    <th scope="col" onclick="sortTable(0)"><center>No</th>
                                    <th scope="col" onclick="sortTable(1)"><center>Nama</th> <!-- dikasih onclick biar bisa pake function Sort -->
                                    <th scope="col" onclick="sortTable(2)"><center>Tahun Rilis</th> <!-- dikasih onclick biar bisa pake function Sort -->

                                    <!-- ACCESS MENUS FOR ADMIN -->
                                    <?php if($this->session->userdata('level')==='1'):?>
                                    <!-- menambahkan title colom aksi  -->
                                    <th scope="col"><center>Aksi</th>
                                    <?php endif;?>
                                </tr>
                            
                            </thead>
                            <tbody>
                                <!-- menampilkan data film -->

                                <?php $no =1; ?>

                                <?php foreach ($film as $key) { ?>
                            
                                <tr>
                                    <td><center><?= $no ?></td>
                                    <td><?= $key['nama'] ?></td>
                                    <td><center><?= $key['tahun'] ?></td>
                                    
                                    <!-- ACCESS MENUS FOR ADMIN -->
                                    <?php if($this->session->userdata('level')==='1'):?>
                                    <td><center>
                                    <!-- menambahkan tombol edit -->
                                    <a href=" <?= base_url('admin/edit_dtf/').$key['id']  ?>" class="btn btn-primary" >Edit</a>
									
									<!-- menambahkan tombol hapus -->
                                    <a href=" <?= base_url('admin/hapus_dtf/').$key['id']  ?>" class="btn btn-danger" >Hapus</a>
									</td>
                                    <?php endif;?>
                
                                </tr>
                                <?php $no++; ?>
                                <?php }; ?>
                                <!-- menampilkan data film -->
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
	
	<b><p class="nav-link"></br><center>Created by <a href="https://github.com/yudhapra"  target="_blank" rel="noopener noreferrer">Yudha Prasetyo</a></center></p></b>
	
	<script src="<?= base_url('assets') ?>/js/sort.js"></script> <!-- dikasih script sort biar bisa pake function Sort -->
    <script src="<?= base_url('assets') ?>/js/jquery-3.5.1.slim.min.js">
    </script>
    <script src="<?= base_url('assets') ?>/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>