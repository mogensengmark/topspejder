<?php
/**
 * The Template for displaying all single posts.
 *
 * @package topspejder
 * @since topspejder 1.0
 */

get_header(); ?>

    <div id="_single" class="row">
        <div id="primary" class="ninecol content-area">
            <div id="content" class="site-content _content-box" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php topspejder_content_nav( 'nav-above' ); ?>

                <?php get_template_part( 'content', 'single' ); ?>

                <?php topspejder_content_nav( 'nav-below' ); ?>

                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template( '', true );
                ?>

            <?php endwhile; // end of the loop. ?>

            </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
    </div><!-- #single .row -->
<?php get_footer(); ?>