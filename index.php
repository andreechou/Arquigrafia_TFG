<?php get_header(); ?>

<div class="container">
	<!-- #intro -->
	<div id="intro" class="row">
		
		<!-- Me -->
		<div class="col-md-6 g-me">

			<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<img src="<?php bloginfo("template_url"); ?>/assets/img/me.jpg" alt="">
				</div>
			</div>

			<div class="row">
				<div class="col-md-10 col-md-offset-3">
					<h1>André Chou</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-4">
					<p>Olá, meu nome é André Chou e estou na minha jornada de graduar em Arquitetura e Urbanismo pela USP. Este já é meu sétimo ano e quero compartilhar com vocês um pouco das minhas experiências que tive fora da minha grade curricular.</p>
				</div>
			</div>

		</div>

		<!-- Project -->
		<div class="col-md-6 g-project">
			
			<div class="row">
				<div class="col-md-8">
					<img src="<?php bloginfo("template_url"); ?>/assets/img/logo-arquigrafia.svg" alt="" class="logo">
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<p>O projeto que estou envolvido chama Arquigrafia. Ela é uma plataforma de fotografias de arquitetura potencializada através da integração de binômios de estudo e identificação das obras e do tageamento inteligente voltado para o nicho dos arquitetos.</p>
					<p>O meu objetivo para pesquisa é desenvolver os próximos passos da ferramenta, tornando-a uma referência para arquitetura. Para isso, o Arquigrafia deverá reunir conteúdos de diversos formatos, desde a imagem, até vídeo, som, texto e etc.</p>
				</div>
			</div>
		</div>

	</div>
	<!-- END #intro -->
	
	<!-- #blog -->
	<div id="blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php
			$random = rand(0,2);
			if ($random == 0) { ?>

				<!-- POST 1 -->
				<div class="row post">
					<div class="col-md-6 col-md-offset-1">
						<figure>
							<!-- <img src="<?php bloginfo("template_url"); ?>/assets/img/img-3.jpg" alt=""> -->
							<?php the_post_thumbnail('large');  ?>
						</figure>
					</div>
					<div class="col-md-5">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<time>Criado em 12 de agosto de 2001</time>
						<div class="row">
							<div class="col-md-10">
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
				</div>

			<?php } elseif ($random == 1) { ?>

				<!-- POST 2 -->
				<div class="row post">
					<div class="col-md-3 col-md-offset-1">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<time>Criado em 27 de janeiro de 1962</time>
						<p><?php the_excerpt(); ?></p>
					</div>
					<div class="col-md-8">
						<figure>
							<!-- <img src="<?php bloginfo("template_url"); ?>/assets/img/img-2.jpg" alt=""> -->
							<?php the_post_thumbnail('large');  ?>
						</figure>
					</div>
				</div>
			
			<?php } elseif ($random == 2) { ?>

				<!-- POST 3 -->
				<div class="row post">
					<div class="col-md-4 col-md-offset-1">
						<figure>
							<!-- <img src="<?php bloginfo("template_url"); ?>/assets/img/img-4.jpg" alt=""> -->
							<?php the_post_thumbnail('large');  ?>
						</figure>
					</div>
					<div class="col-md-7">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<time>Criado em 27 de janeiro de 1962</time>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>

			<?php } ?>
	
	<?php endwhile;
	wp_reset_postdata();
	else : endif; ?>

	</div>

</div>

<?php get_footer(); ?>