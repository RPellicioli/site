<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#5C0090">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cleartype" content="on">
    <meta name="Description" content="Ezoom Description">
    <meta name="keywords" content="agência, web, etc">

    <title>E - Ricardo Pellicioli</title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico') ?>">
	<link href="https://fonts.googleapis.com/css?family=Barlow:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/flex.css') ?>">
</head>
<body>
	<div id="main">
		<header id="header" class="flex justify-start v-center">
			<?php $this->load->view('menu'); ?>
		</header>

		<?php $this->load->view('content', array(
			'banners' => $banners
		)); ?>

		<footer id="footer" class="flex justify-start v-start">
			<div id="footer-left" class="flex column justify-start v-start">	
                <h2 class="title-4">
                	Torne seu negócio OnLife
                </h2>

                <h3 class="title-5">
                	Vamos criar algo incrível juntos?
                </h3>   

                <a href="#" class="btn-contact flex justify-start v-center">
                	<img src="<?php echo base_url('assets/img/send.svg') ?>" />
                	<span>Entre em contato</span>
                </a>  

                <form class="form-contact" action="POST">
                	<span>Acompanhe nossas novidades, deixe seu e-mail</span>
                	<div class="box-input">
                		<input placeholder="Seu melhor e-mail?" type="text" name="email" id="email">
                		<button type="submit">
                			<img src="<?php echo base_url('assets/img/arrow-right.svg') ?>" />
                		</button>
                	</div>	
                </form>     
			</div>

			<div id="footer-right" class="flex column justify-start v-start">
				<div class="box-contact-footer flex column justify-start v-start width-full">
					<h6 class="footer-sub-title">
						Caxias do Sul - RS
					</h6>

					<span>Rua Luiz Cavion, 1252 Bairro: Desvio Rizzo Cep: 95110-022</span>

					<div class="flex justify-start v-center width-full">
						<a href="" class="footer-sub-title footer-phone">(54) 3028 9999</a>
						<a href="" class="footer-sub-title footer-phone"><i></i>(54) 9 9999 9999</a>
					</div>
				</div>

				<div class="flex justify-start v-center">
					<a href="" target="_blank">
						<img class="icon-face" src="<?php echo base_url('assets/img/facebook.svg') ?>" />
					</a>

					<a href="" target="_blank">
						<img class="icon" src="<?php echo base_url('assets/img/instagram.svg') ?>" />
					</a>

					<a href="" target="_blank">
						<img class="icon" src="<?php echo base_url('assets/img/twitter.svg') ?>" />
					</a>

					<a href="" target="_blank">
						<img class="icon" src="<?php echo base_url('assets/img/linkedin.svg') ?>" />
					</a>
				</div>
			</div>
		</footer>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/slider.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
</body>
</html>