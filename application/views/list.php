<section class="internal-list-container">
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
                    <a class="button edit">
                        Editar
                    </a>

                    <a class="button delete">
                        Excluir
                    </a>
                </div>
            </li>
		<?php } ?>
    </ul>
</section>