<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package topspejder
 * @since topspejder 1.0
 */
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class() . " _content_box"; ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'topspejder' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'topspejder' ), '<span class="edit-link">', '</span>' ); ?>
        </div><!-- .entry-content -->
    </article><!-- #post-<?php the_ID(); ?> -->
