<?php
/**
 * The template for displaying Category pages
 *
 */
get_header();
 $s = get_option('simple_directory_settings');
  ?>
<?php simple_directory_vc_compatibility(); ?>
<div id="<?php sdir_archive_id();?>" class=" content-area archive-listing <?php sdir_archive_class();?>">
	<main id="main" class="site-main  " role="main">
			<header class="listing-archive-header row">
				<?php	if ( have_posts() ) :	?>
				<?php $tax = get_queried_object()->term_id;
				$z_image_url = get_option('z_taxonomy_image'.$tax);
				$sdir_image_url = get_option('sdir_taxonomy_image'.$tax);
				if($sdir_image_url !=''){?>
	<div class="medium-3 columns">
	<img src="<?php if
	(function_exists('sdir_taxonomy_image_url')) echo sdir_taxonomy_image_url(); ?>"></div>
			<div class="medium-9 columns">
				<?php }
elseif($z_image_url !='' ){?>
        <div class="medium-3 columns">
      	<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>"></div>
      			<div class="medium-9 columns">
<?php }

else {?><div class="small-12 columns"><?php }?>
				<h1 class="archive-title"><?php echo single_cat_title('',false);?></h1>
		<?php

					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
	</div>
<?php endif;?>
			</header><!-- .archive-header -->
<div class="row row-padded loopcontent">


<?php while ( have_posts() ) : the_post();{?>
	<?php $m = get_post_meta($post->ID);?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="row">
<?php if(isset($m['listing_status'][0]) && $m['listing_status'][0] == 'premium') {
		 if(has_post_thumbnail()){?>

		<div class="small-12 medium-10 columns">
				<?php }
				else{ ?>
					<div class="small-12 columns ">
		<?php } ?>
		<?php  the_title( '<span itemprop="name"><h3 class="entry-title sdir-listing-a-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>&nbsp;<i class="fi-star"></i></h3><span>' );?><?php }
			 else {?>
				 <div class="small-12 columns">
					<?php
				the_title( '<span itemprop="name"><h3 class="entry-title sdir-listing-a-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3><span>' );
			}?>
				<?php if(isset($m['listing_type'][0]) && $m['listing_type'][0] == 'individual'){
						if(isset($m['listing_ind_title'][0])){
							echo '<span>'.$m['listing_ind_title'][0] .'</span><br/>';
						}
						if(isset($m['listing_ind_org'][0])){
							echo '<span>'. $m['listing_ind_org'][0] .'</span>';
						}
															 }?>
				<?php if($m['listing_street_address'][0] !='') {?>
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<span itemprop="streetAddress"><?php echo $m['listing_street_address'][0]; ?></span>,
							<span itemprop="addressLocality"><?php echo $m['listing_city'][0];?></span>,
							<span itemprop="addressRegion"><?php echo $m['listing_state'][0];?></span>
							<span itemprop="postalCode"><?php echo $m['listing_postalcode'][0];?></span>
								</div> <!--END POSTAL ADDRESS--><?php } ?>

				</div>
				<?php if(isset($m['listing_status'][0]) && $m['listing_status'][0] == 'premium') {?>
							<?php if(has_post_thumbnail()){?>
					<div class="medium-2 columns hide-for-small">
					<?php the_post_thumbnail(); ?>
					</div>
			<?php }}?>
			<div class="row">
						<div class="medium-12 columns hide-for-small-down">
							<ul class="button-group even-3">
								<?php sdir_link_bar();?>
							</ul>
						</div>
						<div class="small-12 columns hide-for-medium-up">
					<div class="icon-bar three-up">
						<?php sdir_mobile_link_bar();?>
					</div>
						</div>
		</div>
				</article>
					<hr class="simple-break">
<?php } endwhile;
posts_nav_link();
?>


</main>
</div>
<?php
$s = get_option('simple_directory_settings');
	$show_sidebar = $s['archive_listing_show_sidebar'];
	if ($show_sidebar == 'yes'){
		get_sidebar();
	}?>
<?php get_footer();
