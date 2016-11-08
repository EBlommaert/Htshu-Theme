<?php get_header(); ?>
     
        <div id="container">  
            <div id="content">
             
                <?php if ( have_posts() ) : ?>
                 
                <h1 class="page-title"><?php _e( 'Search Results for: ', 'htshu' ); ?><span><?php the_search_query(); ?></span></h1>
                 
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                <div id="nav-above" class="navigation">
                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'htshu' )) ?></div>
                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'htshu' )) ?></div>
                </div><!-- #nav-above -->
<?php } ?>                            
 
<?php while ( have_posts() ) : the_post() ?>
 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'htshu'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
<?php if ( $post->post_type == 'post' ) { ?>                                   
                    <div class="entry-meta">
                        <span class="meta-prep meta-prep-author"><?php _e('By ', 'htshu'); ?></span>
                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'htshu' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                        <span class="meta-sep"> | </span>
                        <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'htshu'); ?></span>
                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-dTH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
                        
                    </div><!-- .entry-meta -->
<?php } ?>
                     
                    <div class="entry-summary">   
<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'htshu' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'htshu' ) . '&after=</div>') ?>
                    </div><!-- .entry-summary -->
 
<?php if ( $post->post_type == 'post' ) { ?>                                   
                    <div class="entry-utility">
                        <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'htshu' ); ?></span><?php echo get_the_category_list(', '); ?></span>
                        <span class="meta-sep"> | </span>
                        
                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'htshu' ), __( '1 Comment', 'htshu' ), __( '% Comments', 'htshu' ) ) ?></span>
                        
                    </div><!-- #entry-utility -->   
<?php } ?>                    
                </div><!-- #post-<?php the_ID(); ?> -->
 
<?php endwhile; ?>
 
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                <div id="nav-below" class="navigation">
                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'htshu' )) ?></div>
                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'htshu' )) ?></div>
                </div><!-- #nav-below -->
<?php } ?>            
 
<?php else : ?>
 
                <div id="post-0" class="post no-results not-found">
                    <h2 class="entry-title"><?php _e( 'Nothing Found', 'htshu' ) ?></h2>
                    <div class="entry-content">
                        <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'htshu' ); ?></p>
    <?php get_search_form(); ?>                       
                    </div><!-- .entry-content -->
                </div>
 
<?php endif; ?>    
             
            </div><!-- #content -->     
        </div><!-- #container -->
         
<?php get_sidebar(); ?>   
<?php get_footer(); ?>