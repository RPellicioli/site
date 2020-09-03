<div id="internal-menu">
	<?php $this->load->view('menu'); ?>
</div>
<div id="slider">
	<?php foreach($banners as $key => $banner){ ?>
		<div class="img_<?php echo $key; ?> slide-img-<?php echo $key; ?> cntimg <?php echo $key == 0 ? "show-img" : ""; ?>"></div>
	<?php } ?>
</div>