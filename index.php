<?php get_header(); ?>
<?php $i=1; if (have_posts()) : while (have_posts($i<=get_option('posts_per_page'))) : the_post(); ?>
 <div class="content">
        <main class="content__wrapper">
            <section class="container content__shrink">
                <h1 class="txt--300">Son Konular</h1>
                <div class="row row--immutable padding--y-2">
                    <div class="col--fit">
                        <div class="post__date">
                            <div class="post__date_month">Eylül</div>
                            <div class="post__date_day" style="background-color: hsl(-257, 51%, 46%)">10</div>
                        </div>
                    </div>
                    <div class="col">
                        <a href="<?php the_permalink() ?>">
                            <div class="post__title margin--y-0 txt--dark-fade txt--700"><?php the_title(); ?></div>

                            <div class="post__desc margin--y-0 txt--dark-fade"><?php the_content(); ?> <span class="post__props"><span class="txt--dark-fade"><i>#random</i></span></span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="center padding--y-2"><a href="<?php the_permalink() ?>" class="btn bg--accent">Devamını Görüntüle</a></div>
            </section>
           
        </main>
        <div class="hline"></div><a href="#" class="btn backtotop jumper"><i class="fea-chevron-up" style="filter:invert(100%)"></i></a>
		<section class="container content__shrink">
                <h1 class="txt--300">Son Tweetler</h1>
<?php
$adet="3";
$site = file_get_contents("https://twitter.com/netmrhasan");
preg_match_all('@<div class="js-tweet-text-container">(.*?)</div>@si',$site,$veri1);
preg_match_all('@<small class="time">(.*?)</small>@si',$site,$veri2);
preg_match_all('@<div class="ProfileAvatar">(.*?)</div>@si',$site,$veri3);
$kacadet=$adet-1; 
 echo '<h2>'.$lang["son_tweetler"].'</h2>
								<ul class="tweet-list">';
 for ($i = 0; $i <= $kacadet; $i++) { $tarih=strip_tags($veri2[0][$i]); $tweet=$tweet1=$veri1[0][$i]; if(!empty($tweet) && ($tarih)) {
echo '<div class="row row--immutable padding--y-1">
                    <div class="col--fit">
                        <a href="https://www.twitter.com/netmrhasan" aria-label="last-tweet no.2" rel="external noopener" target="_blank">
                            <div class="post__icon" style="background-color: #38A1F3"><i class="fea-twitter" style="filter: invert(1);opacity:1"></i></div>
                        </a>
                    </div>
                    <div class="col"><a href="https://twitter.com/netmrhasan" rel="external noopener" target="_blank"><b>netmrhasan</b> <span class="txt--dark-fade">@netmrhasan</span> &#xB7; </span></a>
                        <p class="margin--y-0">'.$tweet.'</p>
                    </div>
                </div>';
 } } 	 ?>
                
                <div class="center padding--y-2"><a href="https://twitter.com/netmrhasan" class="btn" style="background-color: #38A1F3" rel="external noopener" target="_blank">Devamını Görüntüle</a></div>
            </section>

<?php $i++; endwhile; else: ?>
<?php endif; ?>




<?php get_footer(); ?>