<?php
/**
 * Template Name:  Page with Sidebar on the Left
 *

 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="jumbotron jumbotron-fluid bg-light mb-5 py-5">
    <div class="container text-center">
        <h1 class="display-4"><?php the_title(); ?></h1>
        
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7 px-4 order-2">
            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
            ?>
        </div>

        <div class="col-md-4 mb-4 order-1">
            <?php 
            get_sidebar();
            ?>
        </div>

    </div>
</div>


<?php get_footer();
