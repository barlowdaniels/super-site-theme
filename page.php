<?php

use SDSS\FlexibleContent;

get_header();

if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="page-content-wrapper">
    
        <?php new FlexibleContent(get_the_id()); ?>

    </div>

<?php endwhile; endif;

get_footer();