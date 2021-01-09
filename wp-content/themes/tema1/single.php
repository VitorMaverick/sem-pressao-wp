<?php get_header(); ?>
      <div class="content-area">
        <main>

              <?php
                  while(have_posts()):the_post();
                  ?>
                    <article id="post-<?php the_ID();?>"<?php post_class(); ?>>
                      <header>
                        <div class="post-thumbnail-single">
                          <?php
                            if(has_post_thumbnail()){
                              //tamanho definido por post_thumbnail_size()
                              the_post_thumbnail('tema1-single',array('class'=>'img-fluid'));
                            }else{
                              ?>
                                <img src="https://i.picsum.photos/id/1039/6945/4635.jpg?hmac=tdgHDygif2JPCTFMM7KcuOAbwEU11aucKJ8eWcGD9_Q" height="400px" alt="">
                              <?php
                            }
                           ?>
                        </div>

                    <div class="container">
                      <div class="row justify-content-center single-title">
                        <div class="col-md-9">
                          <h1 ><?php the_title(); ?></h1>
                        </div>
                      </div>
                      <div class="row justify-content-center mb-3 meta">
                        <div class="col-md-9">
                          <p > Publiched by <?php the_author_posts_link();?> on
                            <a href="<?php the_permalink() ?>"><?php echo get_the_date();?></a>
                            <br />
                            <?php if (has_category()): ?>
                              Categorias: <?php the_category(' '); ?>
                              <br>
                            <?php endif; ?>
                            <?php if(has_tag()): ?>
                              Tags: <span><?php the_tags('',','); ?></span>
                            <?php endif; ?>
                          </p>
                        </div>
                      </div>
                        <div class="row justify-content-center">
                          <div class="col-md-10 ">

                          </div>

                        </div>
                      </div>
                    </div>

                </header>

                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-md-9 mt-4 mb-4">
                          <div class="content"><?php the_content(); ?></div>
                        </div>
                      </div>

                      <div class="row justify-content-center">
                        <div class="col-sm-5 text-left">
                          <?php next_post_link('&laquo; %link'); ?>
                        </div>
                        <div class="col-sm-5 text-right">
                          <?php previous_post_link('%link &raquo;'); ?>
                        </div>
                      </div>
                      <div class="container" >
                        <div class="row justify-content-center">
                          <div class="col-md-10">
                            <?php
                              if(comments_open()||get_comments_number()):
                                comments_template();
                              endif;
                              endwhile; ?>
                          </div>

                        </div>
                      </div>
                  </article>



          </div>
        </main>
      </div>
<?php get_footer(); ?>
