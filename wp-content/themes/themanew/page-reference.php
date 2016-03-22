<?php
/**
* Template Name: Références
 * @package WordPress
 * @subpackage thema-new
 * @since thema-new 1.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<section class="section section--references" id="ecommerce">
				    <div class="bcg"
				            data-center="background-position: 50% 0px;"
				            data-top-bottom="background-position: 50% -100px;"
				            data-anchor-target="#ecommerce"
				        >
				            <div class="hsContainer">
				                <div class="hsContent">
				                    <div class="section__text">
				                      <h3>Quelques références</h3>
				                    </div>
				                </div>
				            </div>
				        </div>
				</section>

				<section class="section section--innovation" id="marketing">
				    <div class="bcg"
				            data-center="background-position: 50% 0px;"
				            data-top-bottom="background-position: 50% -100px;"
				            data-anchor-target="#ecommerce"
				        >
				            <div class="hsContainer">
				                <div class="hsContent">
				                  <div class="section__text">
				                    <h3>Accompagnement de l’innovation par le design</h3>
				                  </div>
				                </div>
				            </div>
				        </div>
				    

				</section>

				<section class="section section--creation" id="redaction">
				    <div class="bcg"
				            data-center="background-position: 50% 0px;"
				            data-top-bottom="background-position: 50% -100px;"
				            data-anchor-target="#ecommerce"
				        >
				            <div class="hsContainer">
				                <div class="hsContent">
				                  <div class="section__text">

				                    <h3>Création et organisation d’événements pour la prescription</h3>
				                    
				                  </div>
				                </div>
				            </div>
				        </div>
				    

				</section>

				<section class="section section--marketing" id="code">
				    <div class="bcg"
				            data-center="background-position: 50% 0px;"
				            data-top-bottom="background-position: 50% -100px;"
				            data-anchor-target="#ecommerce"
				        >
				            <div class="hsContainer">
				                <div class="hsContent">
				                  <div class="section__text">

				                    <h3>Strategie marketing</h3>
				                    
				                  </div>
				                </div>
				            </div>
				        </div>
				    

				</section>

				<section class="section section--strategie" id="code">
				    <div class="bcg"
				            data-center="background-position: 50% 0px;"
				            data-top-bottom="background-position: 50% -100px;"
				            data-anchor-target="#ecommerce"
				        >
				            <div class="hsContainer">
				                <div class="hsContent">
				                  <div class="section__text">

				                    <h3>Strategie marketing</h3>
				                    
				                  </div>
				                </div>
				            </div>
				        </div>
				    

				</section>

				<section class="section section--relations" id="code">
				    <div class="bcg"
				            data-center="background-position: 50% 0px;"
				            data-top-bottom="background-position: 50% -100px;"
				            data-anchor-target="#ecommerce"
				        >
				            <div class="hsContainer">
				                <div class="hsContent">
				                  <div class="section__text">

				                    <h3>Strategie marketing</h3>
				                    
				                  </div>
				                </div>
				            </div>
				        </div>
				    

				</section>


			</div>

		</article>
		
		<?php endwhile; endif; ?>

<?php get_footer(); ?>
