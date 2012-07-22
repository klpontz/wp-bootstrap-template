<!-- Displays individual posts to the user -->

<?php get_header(); ?>
 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>               
    <h1><?php the_title(); ?></h2>
     
    <div class="meta">
        <span>Posted by <?php the_author_posts_link() ?></span>
        <span>on <?php the_time('F jS, Y') ?></span>
        <span> | <a href="#">0 comments</a></span>                  
    </div>
     
	 <!-- the_content WordPress tag displays the full post and not just the excerpt -->
    <?php the_content(); ?>   
 
 	<!-- Use http://disqus.com/ for comments -->
    <?php comments_template(); ?>
                                         
<?php else : ?>   
 
    <p>Sorry, no posts matched your criteria.</p>
             
<?php endif; ?>
         
<?php get_sidebar(); ?>
             
<?php get_footer(); ?>