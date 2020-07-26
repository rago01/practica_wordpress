<?php get_header(); ?>

<main class="container">
      <?php if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>

          <h1 class="my-3"><?php the_title(); ?>!!</h1>
          <?php the_content();
        }
      }  ?>

<div class="lista-recetas">
  <h2 class="text-center">Recetas hechas en casa</h2>
    <div class="row">
        <?php

        $args = array(
          'post_type' => 'Recetas',
          'post_per_page' => -1
        );

        $recetas = new WP_Query($args);

        if ($recetas->have_posts()) {
          while ($recetas->have_posts()) {
            $recetas->the_post();
        ?>

            <div class="col-4">
                <figure>
                  <?php the_post_thumbnail('large'); ?>
                </figure>
                <h4>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title();  ?>
                  </a>
                </h4>
            </div>
            <?php
          }
        }
         ?>
    </div>
</div>

</main>
<?php get_footer(); ?>
