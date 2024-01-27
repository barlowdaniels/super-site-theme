<?php
get_header();

$paged = get_query_var( 'paged' ) ?? 1;
$query = new WP_Query([
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page' => 6,
    'paged' => $paged,
]);
?>

<div class="page-content-wrapper">

    <div class="container-fluid hero_block slim pt_5 pb_5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 block-content">
                <div class="block-wrapper">
                    <h1 class="title"><?= get_the_title(get_queried_object()->ID); ?></h1>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="image" style="background-image:url('<?= get_the_post_thumbnail_url(get_queried_object()->ID); ?>');"></div>
        <div class="overlay"></div>
    </div>

    <div class="container-fluid post_archive_block">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10 block-content">
				<div class="row">

					<?php if( $query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

                        <div class="col col-4">
                            <a href="<?= get_the_permalink();?>" class="post-link">
                                <div class="image" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');">
                                    <div class="text">
                                        <div class="details">
                                            <span><?= get_the_date('F Y'); ?></span>
                                            <span><?= wp_trim_words(get_the_title(), 10, '&hellip;'); ?></span>
                                        </div>
                                        <span>+</span>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </a>
                        </div>

					<?php endwhile; ?>
                    
					<div class="col-12">				
						<div class="pagination">
                            <?= ClickOn::superPagination($query); ?>
						</div>
					</div>
                    
					<?php endif; wp_reset_postdata(); ?>				

				</div>
			</div>
			<div class="col-1"></div>
		</div>
	</div>

    <?php new FlexibleContent(get_queried_object()->ID); ?>

</div>

<?php get_footer();