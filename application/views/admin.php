<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/bootstrap.min.css">
	
	<title>Welcome to My Website</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 10px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h2 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-weight: normal;
		margin: 0 0 10px 0;
		padding: 0px 15px 4px 15px;
	}

	code {
		font-size: 18px;
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 13px 0 13px 0;
		padding: 2px 0px 2px 0px;
		text-align: center;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 -10px 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		padding: 12px 10px 12px 10px;
	}
	
	
	<!-- style custom 'btn-n' untuk button facebook -->{}
	.btn-n, .btn-n:hover, .btn-n:active, .btn-n:visited {
		color: #fff;
		background-color: #1b74e4;
		border-color: #1b74e4;
		!important;
	}


	<!-- style custom 'btn-msgr' untuk button messenger -->{}	
	.btn-msgr {
		color: #fff;
		background-color: #0088FF;
		border-color: #0088FF;
		font-weight: bold;
		border-radius: 0.2em;
	}

	.btn-msgr:hover, .btn-msgr:active, .btn-msgr:focus, .btn-msgr.active {
		/* let's darken #0a7cff a bit for hover effect */
		background: #0088FF;
		color: #ffffff;
		border-color: #0088FF;
	}

	</style>
</head>
<body>

<center><div id="container-md" style="width: 745px">
<div id="container" style="width: 700px">
	<h2>Selamat Datang!</h2>

	<div id="body">
		<form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
		<center><h4 style="margin-bottom: 2px; margin-top: -6px;">Ini adalah halaman login website saya</h4>
		<h5 style="margin-top: 66px;">Silahkan Login</h5>
		<?php echo $this->session->flashdata('msg');?>

		<h6 style="margin-top: 8px; margin-bottom: 0px; text-align: center; font-weight: bold;">Email :</h6>
		<input type="email" name="email" class="form-signin" placeholder="Email" required autofocus/>

		<h6 style="margin-top: 2px; margin-bottom: 0px; text-align: center; font-weight: bold;">Password &thinsp;&thinsp;&thinsp;:</h6>
		<input type="password" name="password" class="form-signin" placeholder="Password" required/>

		<div class="checkbox" style="margin-top: 4px;">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
        </div>
        <button class="btn btn-primary" type="submit">&ensp;Login&ensp;</button>
        <a>&ensp;&ensp;</a>
        <input class="btn btn-secondary" type="reset" value="&ensp;Clear&ensp;">
				
		<h5 style="margin-top: 66px;">Jika berkenan anda dapat mengunjungi sosial media saya, berikut ini :</h5></center>
		
		<!-- button github menggunakan class button 'text-white' yang sudah tersedia pada css bootstrap -->
		<center><a href="https://github.com/yudhapra" target="_blank" rel="noopener noreferrer" class="btn text-white" style="font-size: 14px; font-weight: bold; background-color: #333333;">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-github" viewBox="0 0 18 18">
		<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
		</svg>
		Github</a>
		
		<!-- button instagram menggunakan class button 'text-white' yang sudah tersedia pada css bootstrap -->
		<a href="https://instagram.com/yudhaprstoo" target="_blank" rel="noopener noreferrer" class="btn text-white" style="font-size: 14px; font-weight: bold; background-color: #ff00b8;">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-instagram" viewBox="0 0 18 18">
		<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
		</svg>
		Instagram</a>
		
		<!-- button facebook menggunakan class button custom 'btn-n' yang ada pada element style di atas -->
		<a href="https://facebook.com/" target="_blank" rel="noopener noreferrer" class="btn btn-n" style="font-size: 14px; font-weight: bold;">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook" viewBox="0 0 18 18">
		<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
		</svg>
		Facebook</a>

		<!-- button messenger menggunakan class button custom 'btn-msgr' yang ada pada element style di atas -->
		<a href="https://messenger.com/t/yudha.prasetyo.23" target="_blank" rel="noopener noreferrer" class="btn btn-msgr" style="font-size: 14px; font-weight: bold;">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-messenger" viewBox="0 0 18 18">
		<path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
		</svg>
		Messenger</a><br>
		
		<!-- button whatsapp menggunakan class button 'btn-success' yang sudah tersedia pada css bootstrap -->
		<a href="https://wa.me/" target="_blank" rel="noopener noreferrer" class="btn btn-success" style="font-size: 14px; font-weight: bold; margin-top: 4px;">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 18 18">
		<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
		</svg>
		WhatsApp</a>
		
		<!-- button telegram menggunakan class button 'text-white' yang sudah tersedia pada css bootstrap -->
		<a href="https://t.me/aduhboyy" target="_blank" rel="noopener noreferrer" class="btn text-white" style="font-size: 14px; font-weight: bold; margin-top: 4px; background-color: #2481cc;">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-telegram" viewBox="0 0 18 18">
		<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
		</svg>
		Telegram</a>
		
		<!-- button twitter menggunakan class button 'text-white' yang sudah tersedia pada css bootstrap -->
		<a href="#" class="btn text-white" style="font-size: 14px; font-weight: bold; margin-top: 4px; background-color: #1d9bf0;">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-twitter" viewBox="0 0 18 18">
		<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
		</svg>
		Twitter</a>
		</center></br>
		
		<center><h5 style="font-size: 20px;"> Klik <a href=" <?=base_url('akun.md')?>" target="_blank" rel="noopener noreferrer" class="btn btn-warning" style="font-size: 18px; font-weight: bold; padding: 2px 6px 2px 6px;">di sini</a> untuk melihat daftar akun untuk login.</h5></center>
		</form>
	</div>

	<p class="footer">Halaman terbuka dalam <strong>{elapsed_time}</strong> detik. <?php echo  (ENVIRONMENT === 'development') ?  'Versi CodeIgniter : <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div></div></center>

</body>
</html>