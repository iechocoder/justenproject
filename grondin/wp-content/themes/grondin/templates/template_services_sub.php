<?php
/*
* Template Name: Services Sub Pages
*/
get_header();
global $post;
$bannerimage = get_field('main_services_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
$sercespageid = $post->post_parent;
?>
<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="article-detail-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="back-wrap"><a href="#">Services</a></div>
                <div class="sidebar">
                    <ul>
					<?php

					$args = array(
						'post_type'      => 'page',
						'posts_per_page' => -1,
						'post_parent'    => $sercespageid,
						'order'          => 'ASC',
						'orderby'        => 'menu_order'
					 );


					$parent = new WP_Query( $args );

					if ( $parent->have_posts() ) : ?>

                   <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                        <li class="active">
						<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
						</a>
						</li>
                   <?php endwhile; endif; wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="article-detail">
                    <h2><?php the_field('service_heading'); ?></h2>
                    
                    <?php the_field('service_content'); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- article-detail-wrap -->

 <?php
  get_template_part('template-parts/cta','form');

get_footer();
?>