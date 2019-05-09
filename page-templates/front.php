<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">

	<?php if( have_rows('slider') ): ?>

	<?php while( have_rows('slider') ): the_row();

		$image = get_sub_field('image');
		$title = get_sub_field('title');
		?>

		<img src="<?">

		<?php echo $title;?>

	<?php endwhile; ?>

<?php endif; ?>

	<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="slide1.jpg" />
    </li>
    <li>
      <img src="slide2.jpg" />
    </li>
    <li>
      <img src="slide3.jpg" />
    </li>
    <li>
      <img src="slide4.jpg" />
    </li>
  </ul>
</div>

</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>


<section class="">
	
	</div>

</section>

<?php get_footer();

// Can also be used with $(document).ready()
