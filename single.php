<?php get_header(); ?>
  <main>
    <div id="single-post">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
          <div class="single-post-header">
            <?php the_post_thumbnail() ?>
            <div class="single-post-header-content">
              <h2>
                <a href="<?php the_permalink() ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
              <div class="single-post-date">
                <i class="fa fa-calendar"></i>
                <?php the_date() ?>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="post-content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>                       
      <?php endwhile; endif; ?>
    </div>
  </main>
<?php get_footer(); ?>