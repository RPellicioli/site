<?php $this->load->view('header'); ?>

<section id="content-header" class="flex width-full height-full justify-start v-start">
	<div class="box-content-header flex v-start justify-start height-full width-full">
		<div class="menu-mobile justify-between v-center">
			<img id="icon-menu" src="<?php echo base_url('assets/img/menu.svg') ?>" />

			<a href="<?php echo base_url() ?>">
				<img id="logo-menu" src="<?php echo base_url('assets/img/logo.png') ?>" />
			</a>
		</div>

		<div id="content-header-left" class="flex column justify-start v-start">
			<div id="box-main-title" class="flex column justify-start v-start">
				<h1 class="title-1 flex column justify-start v-start">
					<span>Estamos online</span>
					<span>Em suas redes</span>
					<span>Ao seu dispor</span>
				</h1>

				<p>
					Uma agência disruptiva que transforma ideias em inovação e impacta pessoas em todos os ambientes para que se integrem às marcas.
				</p>

				<a href="#" class="btn-default flex justify-center v-center">Conheça a empresa</a>
			</div>

			<div id="mobile-slider">
				<?php 
					$this->load->view('slider',array(
						'banners' => $banners
					)); 
				?>
			</div>

			<div id="content-slide-text" class="flex column justify-center v-start">
				<div class="box-slide-text flex column justify-center v-start">
					<div>
						<span>9</span> anos
					</div>

					<span>de experiência digital</span>
				</div>

				<div class="box-slide-text flex column justify-center v-start">
					<div>
						<span>1</span> profissional
					</div>

					<span>a maior agência de um só profissional (kewk)</span>
				</div>
			</div>
		</div>

		<div id="content-header-right">
			<div id="full-slider">
				<?php $this->load->view('slider'); ?>
			</div>
		</div>
	</div>	
</section>

<section id="services" class="flex column justify-start v-start">
	<div class="flex width-full justify-between v-start">
		<div class="content-service flex v-center justify-start">
			<div>
				<h2 class="title-2 flex column justify-start v-start">
					<span>Plataformas e</span>
					<span>Tecnologias</span>
					<span>Digitais</span>
				</h2>
			</div>
		</div>

		<div class="content-service flex v-center justify-start">
			<div>
				<h2 class="title-2 flex column justify-start v-start">
					<span>Estratégia de</span>
					<span>Comunicação</span>
					<span>Onlife</span>
				</h2>
			</div>
		</div>
	</div>

	<div class="flex width-full justify-between v-start">
		<div class="content-service flex v-center justify-start">
			<div>
				<h2 class="title-2 flex column justify-start v-start">
					<span>Branding e</span>
					<span>Design</span>
				</h2>
			</div>
		</div>

		<div class="content-service flex v-center justify-start">
			<div>
				<h2 class="title-2 flex column justify-start v-start">
					<span>Presença Onlife</span>
					<span>de Marca</span>
				</h2>
			</div>
		</div>
	</div>
</section>

<section id="portfolio" class="flex justify-center v-start wrap">
	<?php for($i = 0; $i < 4; $i++){ ?>
		<a href="<?php echo $partners[$i]->url ?>" target="_blank" class="card" style="background-image: url('<?php echo base_url('assets/img/' . $partners[$i]->file); ?>')">
			<div class="content-card flex column justify-between v-start">
				<h3 class="card-title"><?php echo $partners[$i]->name ?></h3>
				<div class="card-text flex column justify-start v-start">
					<span><?php echo $partners[$i]->description ?></span>
				</div>
			</div>
		</a>
	<?php } ?>
</section>

<section id="depositions" class="flex justify-between v-start">
	<div id="depositions-left" class="flex column justify-start v-start">
		<h2 class="title-3">
			Depoimentos
		</h2>
		<p>
			Acreditamos que as pessoas são uma peça chave importantíssima para o sucesso de nossos projetos, por isso temos um vínculo muito grande com cada uma das que fazem parte deles. Criamos um relacionamento próximo com todos os nossos clientes e assim criamos parceiros de longa data.
		</p>
	</div>

	<div id="depositions-right" class="flex justify-between v-start">
		<?php foreach($testimonies as $key => $testimony){ ?>
			<div class="flex column justify-start v-start">
				<p>
					<?php echo $testimony->description; ?>
				</p>

				<span class="name-dep"><?php echo $testimony->name; ?></span>
				<span class="function-dep">
					<?php echo $testimony->occupation; ?>
				</span>
			</div>
		<?php } ?>
	</div>
</section>

<div id="customers" class="flex justify-center v-start wrap">
	<?php for($j = 4; $j < count($partners); ++$j){?>
		<a href="<?php echo $partners[$j]->url ?>" target="_blank" class="box-customer">
			<img src="<?php echo base_url('assets/img/'. $partners[$j]->file) ?>" />
		</a>
    <?php }?> 	
</div>

<?php $this->load->view('footer'); ?>