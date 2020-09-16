<form class="common-form" action="<?php echo base_url('admin/partner/save' . $partner[0]->id); ?>" method="POST">
    <div class="flex column">
        <label>
            Nome
        </label>
        <input type="text" id="name" name="name" value="<?php if(isset($partner)) echo $partner[0]->name; ?>" class="input" autocomplete="off" />
    </div>

    <div class="flex column">
        <label>
            Site
        </label>
        <input type="text" id="url" name="url" value="<?php if(isset($partner)) echo $partner[0]->url; ?>" class="input" autocomplete="off" />
    </div>

    <div class="flex column">
        <label>
            Descrição
        </label>

        <textarea id="description" name="description" class="textarea"><?php if(isset($partner)) echo $partner[0]->description; ?></textarea>
    </div>

    <?php if(isset($partner)) { ?> <img src="<?php echo base_url('assets/img/' . $partner[0]->file); ?>" class="preview-image-form" alt="image" /> <?php } ?>

    <div class="flex column">
        <label>
            Imagem
        </label>
        <input type="file" id="file" name="file"/>
    </div>
    

    <div class="buttons flex justify-end v-center margin-top-24">
        <button type="submit" class="button save">
            Salvar
        </button>
    </div>
</form>