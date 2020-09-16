<section class="internal-list-container">
    <?php if($message) { ?>
        <div class="message-alert">
            <?php echo $message; ?>
        </div>
    <?php } ?>

    <header class="flex header-list-admin justify-start v-center">
        <div class="w-80">
            Título
        </div>

        <div>
            Ações
        </div>
    </header>
    <ul class="internal-list">
        <?php foreach($list as $key => $item){ ?>
			<li class="flex justify-start v-center">
				<p class="w-80">
					<?php echo $item->name; ?>
				</p>

				<div class="buttons flex v-center">
                    <a href="<?php echo base_url($links["edit"] . $item->id); ?>" class="button edit">
                        Editar
                    </a>

                    <a href="<?php echo base_url($links["delete"] . $item->id); ?>" class="button delete">
                        Excluir
                    </a>
                </div>
            </li>
		<?php } ?>
    </ul>
</section>