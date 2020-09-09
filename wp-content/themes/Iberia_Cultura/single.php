<?php get_header() ?>

<main class="container">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h1 class="center"> <?php the_title() ?></h1>
      <img src="<?php the_post_thumbnail_url() ?>" alt="" style="width: 100%; height:auto;">
      <?php the_content() ?>

  <?php endwhile;
  endif; ?>

</main>

<?php get_footer() ?>