



<?php get_header(); ?>




	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	  
	   <div class="content">
        <main class="content__wrapper">
            <header class="container content__shrink center article">
                <h1 class="txt--700"><?php the_title(); ?></h1>
                <h3 class="txt--300"><i><?php the_content();?></i></h3>
                <time class="txt--small" datetime="2019-08-26"><i class="fea-calendar"></i>&#xA0;&#xA0;<?php echo get_the_date(); ?> </time>&#xA0;&#xA0; <span class="txt--small"><i class="fea-clock"></i>&#xA0;&#xA0;0 minutes to read</span></header>
            <article class="container content__shrink">
                <p><?php the_content();?></p>
                <br><small><a class="btn btn--sm txt--upper">random</a></small></article>
            <div class="hline"></div>
           
            </section>
        </main>
        <div class="hline"></div><a href="#" class="btn backtotop jumper"><i class="fea-chevron-up" style="filter:invert(100%)"></i></a>
	<?php endwhile; else: ?>
	<?php endif; ?>

<?php get_footer(); ?>