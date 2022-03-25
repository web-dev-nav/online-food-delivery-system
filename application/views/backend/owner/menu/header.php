<div class="content-header">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="mt-1 text-dark"><?php echo ucwords($page_title); ?></h4>
                    </div>
                    <div class="col-6">
                        <?php if ($page_name == 'menu/index') : ?>
                            <a href="<?php echo site_url('menu/create'); ?>" class="btn btn-outline-primary btn-rounded float-right" name="button"><?php echo get_phrase("add_new_menu", true); ?></a>
                        <?php elseif ($page_name == 'menu/create' || $page_name == 'menu/edit') : ?>
                            <a href="<?php echo site_url('menu'); ?>" class="btn btn-outline-primary btn-rounded float-right" name="button"><?php echo get_phrase("back_to_menu", true); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>