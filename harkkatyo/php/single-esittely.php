<?php
/**
 * The Template for displaying all single Esittely-posts.
 *
 * @package multipurpose blog
 */

get_header(); ?>

<div class="container">
    <main id="skip_content" role="main" class="middle-align">
    	<?php
        $multipurpose_blog_left_right = get_theme_mod( 'multipurpose_blog_theme_options','Right Sidebar');
	if($multipurpose_blog_left_right == 'Right Sidebar'){ ?>
		    <div class="row">
			<div id="sidebar" class="col-lg-2 col-md-2 "><?php dynamic_sidebar('esittely'); ?></div>
				<div class="<?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-10 col-md-10<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
			       		<div class="content-blog py-3">
						<?php while ( have_posts() ) : the_post();
							get_template_part('template-parts/single-post' );
							the_meta();
			            endwhile; // end of the loop.
?>
			        </div>
		       	</div>
			</div>
		<?php }else if($multipurpose_blog_left_right == 'One Column'){ ?>
			<div class="content-blog py-3">
				<?php while ( have_posts() ) : the_post();
						get_template_part('template-parts/single-post');
						the_meta();
		            endwhile; // end of the loop. ?>
	       	</div>
	    <?php }else if($multipurpose_blog_left_right == 'Three Columns'){ ?>
		    <div class="row">
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
				<div class="content-blog col-lg-6 col-md-6 py-3">
					<?php while ( have_posts() ) : the_post();
						get_template_part('template-parts/single-post');
						the_meta();
		            endwhile; // end of the loop. ?>
		       	</div>
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
			</div>
		<?php }else if($multipurpose_blog_left_right == 'Four Columns'){ ?>
			<div class="row">
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
				<div class="content-blog col-lg-3 col-md-3 py-3">
					<?php while ( have_posts() ) : the_post();
						get_template_part('template-parts/single-post');
						the_meta();
		            endwhile; // end of the loop. ?>
		       	</div>
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
			</div>
		<?php }else if($multipurpose_blog_left_right == 'Grid Layout'){ ?>
			<div class="row">
				<div class="<?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
					<div class="content-blog py-3">
						<?php while ( have_posts() ) : the_post();
							get_template_part('template-parts/single-post');
							the_meta();
		            endwhile; // end of the loop. ?>
		        	</div>
		       	</div>
				<div id="sidebar" class="<?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php dynamic_sidebar('sidebar-2'); ?></div>
			</div>
		<?php } else {?>
			<div class="row">
		       	<div class="<?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
		       		<div class="content-blog py-3">
						<?php while ( have_posts() ) : the_post();
							get_template_part('template-parts/single-post', get_post_format());
							the_meta();
			            endwhile; // end of the loop. ?>
			        </div>
		       	</div>
				<div id="sidebar" class="<?php if( get_theme_mod( 'multipurpose_blog_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php dynamic_sidebar('sidebar-1'); ?></div>
			</div>
		<?php }?>   

<ul style="list-style-type: none;">
<li style="float:left;padding: 10px;"> <?php previous_post_link(); ?> </li>
<li style="float:right; padding: 10px;"> <?php next_post_link(); ?>   </li>
</ul>
<div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>
