<?php get_header(); ?>
<main class="container my-3">
  <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();?>
          <h1 class="my-3"><?php  the_title(); ?></h1>
          <div class="row">
            <div class="col-8">
              <?php the_post_thumbnail('medium'); ?>
            </div>
            <div class="col-4 my-3">
              <?php the_content(); ?>
              <section class="row">
                <div class="col-6">
                  <button type="button" class="btn btn-danger" name="button">
                    Paso a paso
                  </button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-warning" name="button">
                    Ingredientes
                  </button>
                </div>
                <div class="col-6">

                </div>
              </section>
            </div>
          </div>
          <?php
        }
      }
  ?>
</main>
<?php get_footer(); ?>
