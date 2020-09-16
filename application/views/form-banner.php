<form class="common-form" action="<?php echo base_url('admin/banner/save' . $banner[0]->id); ?>" method="POST">
    <div class="flex column">
        <label>
            Título
        </label>
        <input type="email" id="email" name="email" value="<?php if(isset($banner)) echo $banner[0]->name; ?>" class="input" autocomplete="off" />
    </div>

    <?php if(isset($banner)) { ?> <img src="<?php echo base_url('assets/img/' . $banner[0]->file); ?>" class="preview-image-form" alt="image" /> <?php } ?>

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