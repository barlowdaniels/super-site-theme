<div class="container-fluid wysiwyg_block <?= Block::blockClasses();?>">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content <?= get_sub_field('content_layout') . ' wysiwyg ' . get_sub_field('content_width'); ?>">

            <div class="block-wrapper <?= (get_sub_field('style') == 'raised-content') ? 'gradient-border-wrapper gradient-rotate' : ''; ?>">

                <?= (get_sub_field('style') == 'raised-content') ? '<div class="gradient-border-content">' : ''; ?>
                
                <?php the_sub_field('wysiwyg'); ?>

                <p><b>This text has been added in the theme file (themes/<?= get_field('theme_folder','options');?>/super-site/blocks/wysiwyg.php)</b></p>

                <?php if(get_sub_field('buttons')) {
                    echo '<div class="block-buttons">' . Block::blockButtons(get_sub_field('buttons')) . '</div>';
                } ?>

                <?= (get_sub_field('style') == 'raised-content') ? '</div>' : ''; ?>

            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <?= Block::blockCircle(); ?>
</div>