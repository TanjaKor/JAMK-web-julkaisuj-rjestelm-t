<?php
/**
 * The template for displaying Archive Esittely-posts.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package multipurpose blog
 */

get_header(); ?>

<main id="skip_content" role="main">
    <div class="container">
        <?php
        $multipurpose_blog_left_right = get_theme_mod( 'multipurpose_blog_theme_options','Right Sidebar');
        if($multipurpose_blog_left_right == 'Left Sidebar'){ ?>
        <?php }else if($multipurpose_blog_left_right == 'Right Sidebar'){ ?>
            <div class="row">
                <div id="our-services" class="services <?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-9<?php } else { ?>col-lg-8 col-md-9 <?php } ?> my-3">
		<h1> Meidän huipputyypit </h1>
                    <?php
			$args = array(
			'post_type' => array('esittely')
    );
			// The Query
			$the_query = new WP_Query( $args ); 
			if ($the_query->have_posts() ) :
	                        /* Start the Loop */          
        	                while ($the_query-> have_posts() ) : $the_query-> the_post();
					echo '<h3 style="margin-top: 10px;text-align:center;"> <a href = ' .get_permalink() . '>' . get_the_title() . '</a> </h3>';
					echo '<p style="text-align:center">' . get_the_content() . '</p>';
				        $kuva = get_the_post_thumbnail();
					echo '<p style="text-align:center;"><img style="width: 300px;" src=' . $kuva .'</p>';
        	                endwhile;
                      	else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'multipurpose_blog_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php multipurpose_blog_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="<?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>
            </div>
        <?php }else if($multipurpose_blog_left_right == 'One Column'){ ?>
            <div id="our-services" class="services my-3">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                <?php if ( have_posts() ) :
                    /* Start the Loop */          
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content',get_post_format(),get_post_format() );           
                    endwhile;
                    else :
                        get_template_part( 'no-results' ); 
                    endif; 
                ?>
                <?php if( get_theme_mod( 'multipurpose_blog_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php multipurpose_blog_pagination_type(); ?>
                        </div>
                <?php } ?>
            </div>
        <?php }else if($multipurpose_blog_left_right == 'Three Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
                <div id="our-services" class="services col-lg-6 col-md-6 my-3">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */          
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() );           
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'multipurpose_blog_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php multipurpose_blog_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
            </div>
        <?php }else if($multipurpose_blog_left_right == 'Four Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
                <div id="our-services" class="services col-lg-3 col-md-3 my-3">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                    /* Start the Loop */          
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() );           
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'multipurpose_blog_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php multipurpose_blog_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
            </div>
        <?php }else if($multipurpose_blog_left_right == 'Grid Layout'){ ?>
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>
            <div class="row">
                <div id="our-services" class="services <?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?> my-3">
                    <div class="row">
                        <?php if ( have_posts() ) :
                        /* Start the Loop */          
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' );           
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                    </div>
                    <?php if( get_theme_mod( 'multipurpose_blog_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php multipurpose_blog_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="<?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>
            </div>
        <?php } else {?>
            <div class="row">
                <div  id="our-services" class="services <?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?> my-3">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */          
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() );           
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'multipurpose_blog_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php multipurpose_blog_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="<?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>
            </div>
        <?php }?>
    </div>
</main>

<div class="clearfix"></div>

<?php get_footer(); ?>
