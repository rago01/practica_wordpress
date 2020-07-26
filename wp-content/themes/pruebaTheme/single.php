<?php get_header(); ?>
<main class="container my-3">
  <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();?>
          <h1 class="my-3"><?php  the_title(); ?></h1>
          <div class="row">
            <div class="col-6">
              <?php the_post_thumbnail('medium'); ?>
            </div>
            <div class="col-6 my-3">
              <?php the_content(); ?>
              <section class="row">
                  <div class="col-6">
                    <button type="button" data-toggle="modal" data-target="#pasoApaso" class="btn btn-danger" name="button">
                      Paso a paso
                    </button>
                  </div>
                  <div class="col-6">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Ingredientes" name="button">
                      Ingredientes
                    </button>
                  </div>

                  <div class="modal fade" id="pasoApaso" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" >Paso a paso</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          paso 1 <br>
                          paso 2
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
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
