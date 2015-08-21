<?php get_header(); ?>

<!-- MENU -->
<a href="/"><header id="menu"></header></a>

<!-- CONTENT -->
<div class="container post-single">
	<div class="row">
		<div class="col-md-1">
			<h3 class="rot-90">DIÁRIO</h3>
		</div>
		<div class="col-md-11">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<figure class="header" style="background: url('<?php echo $url; ?>') no-repeat center; background-size: cover;">
			</figure>
		</div>
	</div>

<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<h1><?php the_title(); ?></h1>
				<time>Criado em 12 de agosto de 2001</time>
			</div>
		</div>

		<div class="row content">
			<div class="col-md-6 col-md-offset-3">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>