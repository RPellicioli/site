<section class="main-admin flex justify-start">
    <section class="flex column justify-start menu-admin">
        <h3 class="title-admin-menu">Admin</h3>

        <ul class="ul-menu-admin">
            <li>
                <a href="<?php echo base_url('/admin/lista/banners'); ?>">
                    Banners
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('/admin/lista/parceiros'); ?>">
                    Parceiros
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('/admin/lista/depoimentos'); ?>">
                    Depoimentos
                </a>
            </li>
        </ul>
    </section>
    
    <section class="content-admin">
        <div class="header-admin flex justify-between v-center">
            <h2 class="title-admin"><?php if(isset($title)) echo $title; ?></h2>

            <a href="<?php echo base_url() ?>" target="_blank">
                <span class="logo">
                    Ricardo </br> Pellicioli
                </span>
            </a>
        </div>

        <div class="container">
            <?php if(isset($container)) $this->load->view($container); ?>
        </div>
    </section>
</section>