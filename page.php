<?php get_header(); ?>




	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 <main class="cell -9of12">
          <div>
  <section>
    <h1><?php the_title(); ?></h1>
  </section>
  <section>
  
     <div class="media t-hackcss-media">
      <div class="media-body">
        <div class="media-content">
          <?php the_content();?>
        </div>
      </div>

  </section>
</div>

        </main>
      </div>
	<?php endwhile; else: ?>
	<?php endif; ?>

<?php get_footer(); ?>