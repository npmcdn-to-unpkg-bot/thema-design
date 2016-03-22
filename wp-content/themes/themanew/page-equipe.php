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
				
				<div class="equipe">
					<div class="row">
						<div class="col-md-4">
							<div class="equipe__wrap">
								<img src="<?php bloginfo('template_directory'); ?>/static/images/nicole.jpg" alt="nicole">
								<div class="equipe__text">
									<h2>Nicole Lucot-Maitrot</h2>
									<h3>Management de projets d’innovation</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="equipe__wrap">
								<img src="<?php bloginfo('template_directory'); ?>/static/images/myrtille.jpg" alt="myrtille">
								<div class="equipe__text">
									<h2>Myrtille Berthaut</h2>
									<h3>Stratégie marketing &amp; développement économique</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="equipe__wrap">
								<img src="<?php bloginfo('template_directory'); ?>/static/images/chantal.jpg" alt="chantal">
								<div class="equipe__text">
									<h2>Chantal Riols</h2>
									<h3>Formation et sensibilisation à l’innovation</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="equipe__wrap">
								<img src="<?php bloginfo('template_directory'); ?>/static/images/davy.jpg" alt="chantal">
								<div class="equipe__text">
									<h2>Davy Claret</h2>
									<h3>Management &amp; marketing de l’innovation</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="equipe__wrap">
								<img src="<?php bloginfo('template_directory'); ?>/static/images/cindy.jpg" alt="chantal">
								<div class="equipe__text">
									<h2>Cindy Coumba</h2>
									<h3>Assistante communication &amp; community manager</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="equipe__wrap">
								<img src="<?php bloginfo('template_directory'); ?>/static/images/louis.jpg" alt="chantal">
								<div class="equipe__text">
									<h2>Louis Bisson</h2>
									<h3>Business advisor</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</article>
		
		<?php endwhile; endif; ?>

<?php get_footer(); ?>
