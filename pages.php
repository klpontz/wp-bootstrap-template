<!-- Pages are simple semi-static pages of text. No comments. Stripped down version of single.php-->

<?php get_header(); ?>
     
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>               
 
    <h1><?php the_title(); ?></h2>
                             
    <?php the_content(); ?>   
             
<?php endwhile; ?>    
                                                 
<?php else : ?>   
 
    <p>Sorry, no posts matched your criteria.</p>
         
<?php endif; ?>
 
<?php get_sidebar(); ?>
         
<?php get_footer(); ?>