<?php
/**
 * @package topspejder
 * @since topspejder 1.0
 */
?>
<?php
    if ( function_exists( 'soliloquy_slider' ) ) {
?>
<div id="image_slider" class="ninecol">
    <h1>Lidt forskellige billeder..</h1>
    <?php
        soliloquy_slider( '96' );
    ?>
</div>
<div class="buffer"></div>
<?php
    }
?>

<div>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'topspejder' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
        <?php topspejder_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
        </header><!-- .entry-header -->

        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
        <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'topspejder' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'topspejder' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
        <?php endif; ?>

        <footer class="entry-meta">
            <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'topspejder' ) );
                    if ( $categories_list && topspejder_categorized_blog() ) :
            ?>
            <span class="cat-links">
                    <?php printf( __( 'Posted in %1$s', 'topspejder' ), $categories_list ); ?>
            </span>
            <?php endif; // End if categories ?>

            <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'topspejder' ) );
                    if ( $tags_list ) :
            ?>
            <span class="sep"> | </span>
            <span class="tag-links">
                    <?php printf( __( 'Tagged %1$s', 'topspejder' ), $tags_list ); ?>
            </span>
            <?php endif; // End if $tags_list ?>
            <?php endif; // End if 'post' == get_post_type() ?>

            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="sep"> | </span>
            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'topspejder' ), __( '1 Comment', 'topspejder' ), __( '% Comments', 'topspejder' ) ); ?></span>
            <?php endif; ?>

        <?php edit_post_link( __( 'Edit', 'topspejder' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
    </article><!-- #post-<?php the_ID(); ?> -->
</div>