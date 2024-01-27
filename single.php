<?php 
get_header();
$heroImage = (get_field('hero_banner_image')['url']) ? get_field('hero_banner_image')['url'] : get_the_post_thumbnail_url();
?>

<div class="page-content-wrapper">

    <div class="container-fluid hero_block slim pt_5 pb_5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 block-content">
                <div class="block-wrapper">
                    <?= new BlockHeading(get_the_date('F Y')); ?>
                    <h1 class="title"><?= get_the_title(); ?></h1>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="image" style="background-image:url('<?= $heroImage; ?>');"></div>
        <div class="overlay show"></div>
    </div>

    <div class="container-fluid post_single_block wysiwyg_block">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 block-content">
                <div class="post-content">
                    <?php the_content();?>
                </div>
                <a class="back-to-all theme-btn secondary hover-primary" href="/news/">
                    <?= file_get_contents(__DIR__ . '/app/assets/img/arrow-left.svg'); ?>
                    Back To All News
                </a>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

</div>

<?php get_footer();