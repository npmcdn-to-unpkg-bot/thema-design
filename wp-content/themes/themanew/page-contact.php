<?php
/**
* Template Name: Contact
 * @package WordPress
 * @subpackage thema-new
 * @since thema-new 1.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">

				<section class="section section--main" id="ecommerce">
				    <div class="bcg"
				            data-center="background-position: 50% 0px;"
				            data-top-bottom="background-position: 50% -100px;"
				            data-anchor-target="#ecommerce"
				        >
				            <div class="hsContainer">
				                <div class="hsContent">
				                    <div class="section__text section__text--contact">
				                    	<p>THEMA_DESIGN <br> 72 rue de Sèvres <br>75007 Paris France</p>
				                      	<p class="mb">Tel : +33(01) 77 32 80</a></p>
				                		<?php the_content(); ?>
				                    </div>
				                </div>
				            </div>
				        </div>
				</section>
				
			</div>

		</article>
		
		<?php endwhile; endif; ?>

<?php get_footer(); ?>
