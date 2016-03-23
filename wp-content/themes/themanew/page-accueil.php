<?php
/**
 * Template Name: Accueil
 * @package WordPress
 * @subpackage thema-new
 * @since thema-new 1.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="homepage">
			<article class="post" id="post-<?php the_ID(); ?>">
			
				<div class="entry">
					<section class="section section--main" id="agence">
					    <div class="bcg"
					            data-center="background-position: 50% 0px;"
					            data-top-bottom="background-position: 50% -100px;"
					            data-anchor-target="#agence"
					        >
					            <div class="hsContainer">
					                <div class="hsContent">
					                    <div class="section__text">
					                   		<img src="<?php bloginfo('template_directory'); ?>/static/images/logo.png" alt="Thema Design Logo" class="logo mb">
					                   		<h2 class="mt">Agence conseil</h2>
					                    </div>
					                </div>
					            </div>
					        </div>
					</section>
					<div class="container">
						<div class="text-center mt+ mb+">
							<div class="row">
								<div class="col-md-4">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
									<h3 class="h3 red">Développement de projets d’innovation par le design</h3>
								</div>
								
								<div class="col-md-4">
									<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
									<h3 class="h3 green">Actions marketing et communication ciblées sur les architectes et les prescripteurs</h3>
								</div>
								
								<div class="col-md-4">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<h3 class="h3 brown">Stratégies de valorisation des marques et des savoir faire</h3>
								</div>
							</div>
							
							<div class="mb+">
								<h3 class="h3">Depuis 2005, THEMA_DESIGN conseille les entreprises et les collectivités avec un seul objectif : <br><strong>le développement économique de ses clients</strong></h3>
							</div>
						
							<img src="<?php bloginfo('template_directory'); ?>/static/images/vous-souhaitez.png" alt="vous souhaitez" data-bottom-top="transform: translateY(200px) rotate(20deg); " data-center-center="transform: translateY(0px) rotate(0deg);">
						</div>
						
						
						<section>
							<div class="row">
								<div class="col-md-6">
									<div class="homepage__section">
										<h3 class="h3 green">Vous souhaitez développer vos relations avec les prescripteurs ?</h3>
										<p>Nous vous proposons des actions <strong>marketing et communication</strong> pour séduire les architectes, les décorateurs, les designers , les bureaux d’études, et développer votre business.
										Nos <strong>stratégies de communication</strong> ciblées et nos événements professionnels et conviviaux ont prouvé leur capacité à développer votre marque et conquérir des marchés.</p>
										<aside class="green">
											<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
											<p>Les outils proposés par THEMA_DESIGN:</p>
											<ul>
												<li>Evénements dédiés</li>
												<li>Relations presse</li>
												<li>Communication digitale et réseaux sociaux</li>
												<li>Veilles prospectives sur les matériaux et l’innovation dans le design et la construction</li>
												<li>Concours de design</li>
											</ul>
										</aside>
									</div>
								</div>
								<div class="col-md-6">
									<img src="<?php bloginfo('template_directory'); ?>/static/images/developper.png" alt="vous souhaitez"  data-bottom-top="transform: translate(30px, 200px) rotate(-20deg); " data-center-center="transform: translate(0px, 0px) rotate(0deg);">
								</div>
							</div>
						</section>
						
						<section>
							<div class="row">
								<div class="col-md-6">
									<img src="<?php bloginfo('template_directory'); ?>/static/images/innover.png" alt="innover" data-bottom-top="transform: translate(-30px, 200px); " data-center-center="transform: translate(0px, 0px);">
								</div>
								<div class="col-md-6">
									<div class="homepage__section">
										<h3 class="h3 red">Vous souhaitez développer un projet d’innovation par le design ?</h3>
										<p><strong>Entreprises et collectivités,</strong> nous vous accompagnons dans la <strong>formalisation</strong> et la <strong>mise en œuvre</strong> de vos projets d’innovation par le design, y compris la <strong>sélection d’un designer</strong>. Cette démarche permet d’identifier, de partager, de prioriser, de financer de nouvelles idées, avec une vision stratégique transversale <strong>gage de succès</strong>.</p>
										<aside class="red">
											<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
											<p>Les outils proposés par THEMA_DESIGN:</p>
											<ul>
												<li>Un diagnostic design avec un financement par la BPI</li>
												<li>La MIDV, Méthode d’Innovation par le Design Viable, développée sur l’expérience d’accompagnement de plus de 50 entreprises</li>
											</ul>
									</div>
									</aside>
								</div>
							</div>
						</section>
						
						<section>
							<div class="row">
									<div class="homepage__section">
										<div class="col-md-6">
											<aside class="brown">
												<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
												<p>Les outils proposés par THEMA_DESIGN:</p>
												<ul>
													<li>Réflexion stratégique</li>
													<li>Relations publics</li>
													<li>Relations presse</li>
													<li>Événements</li>
													<li>Concours d’innovation</li>
													<li>Communication digitale &amp; réseaux sociaux</li>
												</ul>
											</aside>
										</div>
										<div class="col-md-6">
											<h3 class="h3 brown">Vous souhaitez valoriser vos marques et vos savoir faire ?</h3>
											<p><strong>Nous vous conseillons</strong> dans l’élaboration de votre <strong>stratégie de marque</strong> et sa mise en œuvre dans l’objectif de développer votre notoriété, votre capital d’image, votre singularité, et ainsi d’augmenter la <strong>valeur de votre entreprise ou de votre territoire</strong>.</p>
										</div>
										<div class="col-md-12">
											<div class="text-center">
												<img src="<?php bloginfo('template_directory'); ?>/static/images/valoriser.png" alt="valoriser" data-bottom-top="transform: translate(30px, 200px) rotate(20deg); " data-center-center="transform: translate(0px, 0px) rotate(0deg);">
											</div>
										</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			
			</article>
		</div>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>
