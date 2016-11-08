<?php get_header(); ?>
 
        <div id="container">
            <div id="content">
 
               <div id="post-0" class="post error404 not-found">
                <h1 class="entry-title"><?php _e( 'Not Found', 'htshu' ); ?></h1>
                <div class="entry-content">
                    <p><?php _e( 'Excuses, we konden niet vinden wat u zocht. Wellicht helpt het om gebruik te maken van de zoekfunctie.', 'htshu' ); ?></p>
<?php get_search_form(); ?>
                </div><!-- .entry-content -->
            </div><!-- #post-0 -->
 		
 
            </div><!-- #content -->
        </div><!-- #container -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>