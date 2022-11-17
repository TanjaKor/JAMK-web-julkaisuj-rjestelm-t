<?php
/**
 * Template name: Galleriatemplate
 * The template for displaying gallery-page.
 *
 * @package multipurpose blog
 */

get_header(); ?>

<?php do_action( 'multipurpose_blog_header_page' ); ?>

<main id="skip_content" class="content-blog py-3" role="main">
    <div class="container background-img-skin">
        <div class="middle-align">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if(has_post_thumbnail()) { ?>
                    <div class="feature-box">   
                        <?php the_post_thumbnail(); ?> 
                    </div>
                <?php } ?>
                <div class="new-text"><?php the_content();?>
                <?php
                    wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'multipurpose-blog' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'multipurpose-blog' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                    ) );

                    //If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();
                ?>
            <?php endwhile; // end of the loop. ?> 
            <div class="clear"></div>    
        </div>
    </div>
</main>

<?php do_action( 'multipurpose_blog_footer_page' ); ?>

<?php get_footer(); ?>
