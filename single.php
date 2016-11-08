<?php get_header(); ?>
 	
    <div id="page-wrapper" style="background:url(<?php the_field('blog_post_header'); ?>);background-attachment: fixed; background-position: center center; background-repeat: no-repeat;
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
							<h2><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h2>							
						</div>
						<a href="#two" class="more scrolly">Ontdek meer</a>
					</section>

				
					

				<!-- Two -->
                	<section id="two" class="wrapper alt style2">
						
                       
                	<section class="spotlight">
							<div class="image">
                            	<?php the_post_thumbnail(); ?>                            	
                            </div>
                            <div class="content">								
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<h2 class="entry-title"><?php the_title(); ?></h2>
                    <?php the_post (); ?>
                  <p><?php the_content(); ?></p>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'htshu' ) . '&amp;after=</div>') ?>
                </div><!-- #post-<?php the_ID(); ?> -->
							</div>
                    </section>
			
							
						
						
					</section>

				<!-- Three -->
					

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
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>