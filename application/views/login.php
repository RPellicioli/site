<section id="section-1" class="content-login content vh-full flex justify-center v-center">
	<span class="logo">
		Ricardo </br> Pellicioli
	</span>
	<div class="box-login">
		<div class="header-login flex justify-center v-center">
			LOGIN
		</div>
		<form id="form-login" action="<?php echo base_url('login/send') ?>" method="POST" class="flex column justify-start v-start">
			<label>
				E-mail
			</label>
			<input type="email" id="email" name="email" class="input" autocomplete="off" />
			<label>
				Senha
			</label>
			<input type="password" id="password" name="password" class="input" />
			<div class="box-buttons flex column v-center justify-center">
				<button type="submit" id="login" class="button-default">Entrar</button>
			</div>
		</form>
	</div>
</section>