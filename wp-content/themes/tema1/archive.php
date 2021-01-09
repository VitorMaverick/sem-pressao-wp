<?php get_header(); ?>
        <main>
          <?php get_template_part('template-parts/slider'); ?>
          <div class="container">
            <div class="row  align-items-center ">
              <div class="col-md-6 text-center  index-title  p-auto">

                <h2 class="float-md-left m-auto">Últimos de Posts</h2>
              </div>
              <div class="col-md-6 text-center align-items-center">
                <?php if(is_active_sidebar('aprenda-wp-sidebar-1')):?>
                  <aside class ="col-xs-12   h-100 d-inline float-md-right" >
                    <?php dynamic_sidebar('aprenda-wp-sidebar-1');?>
                  </aside>
                <?php endif;?>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row mt-5 mb-5">
              <div class="col-md-9 pl-0 pr-0 pr-md-4" >
                <?php
                  if(have_posts()):
                    while(have_posts()):the_post();
                      	get_template_part('template-parts/content');
                    endwhile;
                ?>
                <div class="paginacao">
                  <?php
                      the_posts_pagination(array(
                      'prev_text'=>'Previous',
                      'next_text'=>'Next',
                        ));
                  ?>

                </div>
                <?php
                          else:
                      ?>
                      <p>Nothing to display</p>

                <?php endif; ?>
              </div>
              <div class="col-md-3 ">
                <?php if(is_active_sidebar('aprenda-wp-sidebar-2')):?>
                    <div class ="recent-posts" >
                    <?php dynamic_sidebar('aprenda-wp-sidebar-2');?>
                  </div>
                <?php endif;?>
              </div>



            </div>



          </div>
        </main>
      </div>
<?php get_footer(); ?>
