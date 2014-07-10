<?php get_header(); ?>

  <div class="container">   
    <div class="row">
      
      <div class="col-md-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="row">

          <div class="page-header col-md-4">
            <h1><?php the_title(); ?></h1>
            <p>Selected on <?php echo the_time('l, F jS, Y');?>, stored in the <?php the_category( ', ' ); ?> department.</p>
          </div>

          <div class="entry-content col-md-8">
            <?php the_content(); ?>
          </div>

        </div>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>


      </div>
      
      <?php get_sidebar( 'blog' ); ?>

    </div>

<?php get_footer(); ?>
