<?php get_header(); ?>

<div class="container">
  <div class="row">

<?php
  //Set the initial count outside of the loop.
	$count = (int)0;
	//Start the post loop
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="col-md-4">
      
      	<?php if ( has_post_thumbnail()) : ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php the_post_thumbnail('medium'); ?>
        </a>
        <?php endif; ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p>
          By <?php the_author(); ?> 
          on <?php echo the_time('l, F jS, Y');?>
          in <?php the_category( ', ' ); ?>.
        </p>
  
        <hr>
  
        <?php the_excerpt(); ?>
      </div>

      <?php $count++; ?>
      <?php if ( $count % 3 == 0): ?>

      </div><div class="row">
      
      <?php endif; ?>

<?php endwhile; else: ?>
  
  <div class="page-header">
    <h1>Nothing to see here.</h1>
  </div>

  <p>No posts found.</p>

<?php endif; ?>       

  </div>
</div>

<?php get_footer(); ?>
