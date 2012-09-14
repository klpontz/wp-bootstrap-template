<?php get_header(); ?>

<!-- The Loop is basically just a way of querying the WordPress database and then outputting list of blog posts to the screen. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>               
     
    <h2><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
     
    <div class="meta">
        <span>Posted by <?php the_author_posts_link() ?></span>
        <span>on <?php the_time('F jS, Y') ?></span>
        <span> | <a href="<?php the_permalink(); ?> #comments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a></span>           
    </div>
     
    <?php the_excerpt(); ?>   
     
    <a href="<?php the_permalink() ?>">Read more</a>
     
<?php endwhile; ?>    
<?php else : ?>   
 
    <p>Sorry, no posts matched your criteria.</p>
     
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>