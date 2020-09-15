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
		<?php $this->load->view($content); ?>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/slider.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
</body>
</html>