<?php
get_header();

// Search term if provided
$searched = (strlen($_GET['s']) > 0) ? $_GET['s'] : null;
// Hero title
$title = ( $searched ) ? 'You searched : <span>' . $searched . '</span>' : 'You didn\'t specify any search terms';
// Hero subtitle
$subTitle = ( !$searched ) ? '<p>We\'re not sure what you\'re looking for. So, here are some pages you might find interesting instead.</p>' : null;

// Define WP_Query args
$paged = get_query_var( 'paged' ) ?? 1;
$args = [
    'post_type' => ['post', 'page', 'product'],
    'post_status' => 'publish',
    's' => $searched,
    'posts_per_page' => 3,
    'paged' => $paged,
];
// Get search results from all sites
// $search = new NetworkSearch($args);
// $searchData = $search->render();

// Limit to 10 posts if no search terms provided
//if( !$searched ) {
//    $searchData = array_slice($searchData, 0, 10);
//}
?>

<div class="page-content-wrapper search-results">

    <div class="container-fluid hero_block slim pt_5 pb_5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 block-content">
                <div class="block-wrapper">
                    <?= new BlockHeading('Search Results'); ?>
                    <div class="title"><?= $title; ?></div>
                    <?php echoIfExists($subTitle, 'div', 'sub-text'); ?>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="image" style="background-image:url('');"></div>
        <div class="overlay show"></div>
    </div>


    <div class="container-fluid results-list">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 block-content">

                <?php if( $searchData ) { 

                    foreach ($searchData['results'] as $result) { ?>

                        <div class="result">
                            <div class="post-type"><?= customPostTypeLabel( $result['post_type'] ); ?></div>
                            <h4><?= $result['title'];?></h4>
                            <p><?= $result['excerpt'];?></p>
                            <a href="<?= $result['permalink']; ?>" class="theme-btn small secondary hover-primary">Read More</a>
                        </div>
                        
                    <?php }

                }
                
                if( !$searched ) { ?>
                    
                    <div class="search-again">
                        <h3>Not what you were looking for?</h3>
                        <div class="theme-btn primary hover-outline-primary search-open">Search Again</div>
                    </div>
                    
                <?php } ?>
                
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 pagination">
                <?= themePagination($searchData); ?>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    
</div>

<?php get_footer();