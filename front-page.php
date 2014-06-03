<?php get_header(); ?>

<div class="container">
  <div class="row">

<?php
  //Set the initial count outside of the loop.
	$count = (int)0;
	//Start the post loop
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="col-md-4">

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
      <?php if ( $count % 4 == 0): ?>

      </div><div class="row">

<?php endwhile; else: ?>
  
  <div class="page-header">
    <h1>Nothing to see here.</h1>
  </div>

  <p>No posts found.</p>

<?php endif; ?>       

  </div>
</div>

<?php get_footer(); ?>
