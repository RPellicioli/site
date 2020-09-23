<form class="common-form" action="<?php $id = ""; if(isset($testimony)) $id = "/".$testimony[0]->id; echo base_url('admin/depoimentos/salvar' . $id); ?>" method="POST" enctype="multipart/form-data">
    <div class="flex column">
        <label>
            Nome
        </label>
        <input type="text" id="name" name="name" value="<?php if(isset($testimony)) echo $testimony[0]->name; ?>" class="input" autocomplete="off" />
    </div>

    <div class="flex column">
        <label>
            Profissão/Cargo
        </label>
        <input type="text" id="occupation" name="occupation" value="<?php if(isset($testimony)) echo $testimony[0]->occupation; ?>" class="input" autocomplete="off" />
    </div>
    
    <div class="flex column">
        <label>
            Depoimento
        </label>

        <textarea id="description" name="description" class="textarea"><?php if(isset($testimony)) echo $testimony[0]->description; ?></textarea>
    </div>

    <div class="buttons flex justify-end v-center margin-top-24">
        <button type="submit" class="button save">
            Salvar
        </button>
    </div>
</form>