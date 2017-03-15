<?php /**
* The template for displaying single listings
*
**/

get_header(); ?>
<?php simple_directory_vc_compatibility(); ?>

<div id="<?php sdir_single_id();?>" class=" single-content content-area <?php sdir_single_class();?>">
	<main id="main" class="site-main " role="main">
<?php while ( have_posts() ) : the_post();
$m = get_post_meta($post->ID);
$s = get_option('simple_directory_settings'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">


	<div class="<?php sdir_logo_class();?>">
		<?php echo get_the_post_thumbnail(); ?>
</div>
<div class="<?php sdir_title_class();?>">
	<?php
	if($m['listing_status'][0] == 'basic'){
			the_title('<span itemprop="name"><h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a> &nbsp;</h1></span>' );
		}
else { the_title('<span itemprop="name"><h1 class="single-listing-title entry-title">', ' &nbsp;<i class="fi-star"></i></h1><span>');
}?>
		<?php sdir_address_output();?>
		<?php sdir_job_info();?>

</div>
<div class="<?php sdir_map_class();?>">
	<?php sdir_embedded_map();?>
</div>

</div>
<div class="row">
	<div class="small-12 columns hide-for-small-down">
<ul class="button-group even-3">
	<?php sdir_link_bar();?>

</ul>
</div>
<div class="small-10 small-centered columns show-for-small-down">
	<ul class="button-group stack">
	<?php sdir_mobile_link_bar();?>
</ul>
	</div>


</div>
<div class="row hide-for-small-down">
	<div class="medium-6 columns">
		<?php
		(isset($m['phone_2_label'][0])) ? $phone_2_label = $m['phone_2_label'][0] : __('Other Phone','sdp');
		if(isset($m['listing_phone_2'][0]) && $m['listing_phone_2'][0] != '' ){
			echo '<strong>'.$phone_2_label.':</strong>&nbsp;';
			echo '<a href="tel:'.$m['listing_phone_2'][0].'">'. $m['listing_phone_2'][0] .'</a>';

		}?>
	</div>
	<div class="medium-6 columns">
		<?php
		if(isset($m['listing_fax'][0]) && $m['listing_fax'][0] != ''){
			echo '<strong>'. __('Fax','sdp'). ':</strong>&nbsp;'. $m['listing_fax'][0];
		}
		?>
	</div>
</div>
<?php sdir_social_block();?>
<div class="row row-padded">
	<div class="small-12 columns"><!--LISTING DESCRIPTION-->
	<span itemprop="description"><?php the_content(); ?></span>
</div>
</div>
<?php
if(isset($s['show_comments']) && $s['show_comments'] == 'yes'){?>

	<div class="row">
<div class="small-12 columns">

<?php comments_template(); ?>
</div>
</div>
<?php }?>
</article>
<?php endwhile;?>
</main>

</div>
<?php
$s= get_option('simple_directory_settings');
	$show_sidebar = $s['single_listing_show_sidebar'];
	if ($show_sidebar == 'yes'){
		get_sidebar();
	}?>

<?php get_footer();?>
