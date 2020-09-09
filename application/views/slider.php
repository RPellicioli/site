<div id="internal-menu">
	<?php $this->load->view('menu'); ?>
</div>
<div id="slider">
	<?php foreach($banners as $key => $banner){ ?>
		<div style="background-image: url('<?php echo base_url('assets/img/' . $banner->file); ?>')" class="img_<?php echo $key; ?> slide-img-<?php echo $key; ?> cntimg <?php echo $key == 0 ? "show-img" : ""; ?>"></div>
	<?php } ?>
</div>