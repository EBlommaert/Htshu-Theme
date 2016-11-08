<?php /* Template Name: Front page */ ?>
<?php get_header(); ?>

<div id="page-wrapper" style="background:url(<?php the_field('homepage_banner'); ?>);background-attachment: fixed; background-position: center center; background-repeat: no-repeat;
    background-size: cover;
    padding-top: 0;">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="<?php bloginfo( 'url' ) ?>/"><img style="margin-top:17px;" src="<?php bloginfo( 'template_url' ) ?>/assets/images/kies-mij.png"/></a></h1>
						<nav id="nav">
                        
                        	
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
									</div>
								</li>
							</ul>
						</nav>
					</header>

<section id="banner">
						<div class="inner">
							<h2><a href="<?php bloginfo( 'url' ) ?>/"><?php bloginfo( 'name' ) ?></a></h2>
							<p><?php the_field('slogan'); ?></p>
							<ul class="actions">
								<li><a href="<?php the_field('banner_button_link'); ?>" class="button special"><?php the_field('banner_button_text'); ?></a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Ontdek meer</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2><?php the_field('over_ons_titel'); ?></h2>
								<p><?php the_field('over_ons_introductie'); ?></p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
                
              

					<section id="two" class="wrapper alt style2">
						
                         <?php


				$args = array( 'posts_per_page' => 4, 'offset'=> 0, 'category_name' => 'homepage' );
				
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                	<section class="spotlight">
							<div class="image">
                            	<?php the_post_thumbnail(); ?>                            	
                            </div>
                            <div class="content">
								<h2><?php the_title(); ?></h2>
								<p> <?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="button special">Lees meer</a>
							</div>
                    </section>
				<?php endforeach; 
				wp_reset_postdata();?>
							
						
						
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2><?php the_field('argumenten_titel'); ?></h2>
								<p><?php the_field('argumenten_ondertitel'); ?></p>
							</header>
							<ul class="features">
								<li class="icon fa-space-shuttle">
									<h3><?php the_field('argument1_titel'); ?></h3>
									<p><?php the_field('argument1_content'); ?></p>
								</li>
								<li class="icon fa-users">
									<h3><?php the_field('argument2_titel'); ?></h3>
									<p><?php the_field('argument2_content'); ?></p>
								</li>
								<li class="icon fa-clock-o">
									<h3><?php the_field('argument3_titel'); ?></h3>
									<p><?php the_field('argument3_content'); ?></p>
								</li>
								<li class="icon fa-code">
									<h3><?php the_field('argument4_titel'); ?></h3>
									<p><?php the_field('argument4_content'); ?></p>
								</li>
								<li class="icon fa-heart-o">
									<h3><?php the_field('argument5_titel'); ?></h3>
									<p><?php the_field('argument5_content'); ?></p>
								</li>
								<li class="icon fa-beer">
									<h3><?php the_field('argument6_titel'); ?></h3>
									<p><?php the_field('argument6_content'); ?></p>
								</li>
							</ul>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2><?php the_field('call_to_action_titel'); ?></h2>
								<p><?php the_field('call_to_action_desc'); ?></p>
							</header>
							<ul class="actions vertical">
								<li><?php the_field('call_to_action_form'); ?></li>								
							</ul>
						</div>
					</section>

<?php get_footer(); ?>