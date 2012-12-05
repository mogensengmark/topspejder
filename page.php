<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package topspejder
 * @since topspejder 1.0
 */

get_header();
?>

    <div id="_page">
        <div id="primary" class="ninecol content-area">
            <div id="content" class="site-content _content-box" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'page' ); ?>

                        <?php comments_template( '', true ); ?>

                <?php endwhile; // end of the loop. ?>

            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
    </div> <!-- #_page .row -->
<?php get_footer(); ?>