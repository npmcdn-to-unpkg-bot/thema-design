<?php
/**
* Template Name: Equipe
 * @package WordPress
 * @subpackage thema-new
 * @since thema-new 1.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<section class="section section--equipe" id="ecommerce">
				    <div class="bcg"
				            data-center="background-position: 50% 0px;"
				            data-top-bottom="background-position: 50% -100px;"
				            data-anchor-target="#ecommerce"
				        >
				            <div class="hsContainer">
				                <div class="hsContent">
				                    <div class="section__text">
				                      <h3>L'équipe</h3>
				                    </div>
				                </div>
				            </div>
				        </div>
				</section>
				
				<div class="container">
					<div class="equipe">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="equipe__wrap">
									<img src="<?php bloginfo('template_directory'); ?>/static/images/nicole.jpg" alt="nicole">
									<div class="equipe__text">
										<h2 class="h4">Nicole Lucot-Maitrot</h2>
										<h3 class="h6">Management de projets d’innovation</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="equipe__wrap">
									<img src="<?php bloginfo('template_directory'); ?>/static/images/myrtille.jpg" alt="myrtille">
									<div class="equipe__text">
										<h2 class="h4">Myrtille Berthaut</h2>
										<h3 class="h6">Stratégie marketing &amp; développement économique</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="equipe__wrap">
									<img src="<?php bloginfo('template_directory'); ?>/static/images/chantal.jpg" alt="chantal">
									<div class="equipe__text">
										<h2 class="h4">Chantal Riols</h2>
										<h3 class="h6">Formation et sensibilisation à l’innovation</h3>
									</div>
								</div>
							</div>
							</div>
							<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="equipe__wrap">
									<img src="<?php bloginfo('template_directory'); ?>/static/images/davy.jpg" alt="davy">
									<div class="equipe__text">
										<h2 class="h4">Davy Claret</h2>
										<h3 class="h6">Management &amp; marketing de l’innovation</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="equipe__wrap">
									<img src="<?php bloginfo('template_directory'); ?>/static/images/cindy.jpg" alt="cindy">
									<div class="equipe__text">
										<h2 class="h4">Cindy Coumba</h2>
										<h3 class="h6">Assistante communication &amp; community manager</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="equipe__wrap">
									<img src="<?php bloginfo('template_directory'); ?>/static/images/william-hutter.jpg" alt="william hutter">
									<div class="equipe__text">
										<h2 class="h4">William Hutter</h2>
										<h3 class="h6">Web designer</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</article>
		
		<?php endwhile; endif; ?>

<?php get_footer(); ?>
