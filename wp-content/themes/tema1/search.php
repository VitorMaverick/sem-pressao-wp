<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"/>
      <div class="content-area">
        <main>
          <div class="container">
            <h1>Search results for: <?php echo get_search_query(); ?></h1>
              <?php
                if(have_posts()):
                  while(have_posts()):the_post();
                  ?>
                    <article class="">
                      <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
                      <div class="post-thumbnail">
                        <?php

                          if(has_post_thumbnail()){
                            //tamanho definido por post_thumbnail_size()
                            the_post_thumbnail('tema1_blog',array('class'=>'img-fluid'));
                            //tamanho padrão 150x150 pixels
                            //the_post_thumbnail('thumb');
                            //largura máxima padrão de 300 pixels
                            //the_post_thumbnail('medium');
                            //largura máxima padrão 700 pixels
                            //the_post_thumbnail('medium_large');
                            //Largura maxima padrão 1025 pixels
                            //the_post_thumbnail('large');
                            //tamanho completo da imagem
                            //the_post_thumbnail('full');
                            //the_post_thumbnail(array(200,200));
                          }else{
                            ?>
                            <img class="img-fluid" src="https://i.picsum.photos/id/1039/6945/4635.jpg?hmac=tdgHDygif2JPCTFMM7KcuOAbwEU11aucKJ8eWcGD9_Q" >
                            <?php
                          }
                         ?>
                      </div>
                      <div class="meta">
                        <p>Publiched by <?php the_author_posts_link();?> on
                          <a href="<?php the_permalink() ?>"><?php echo get_the_date();?></a>
                          <?php if (has_category()): ?>
                            Categorias: <span><?php the_category(''); ?></span>
                            <br>
                          <?php endif; ?>
                          <?php if(has_tag()): ?>
                            Tags: <span><?php the_tags('',','); ?></span>
                          <?php endif; ?>
                        </p>
                      </div>
                      <div class="content"><?php the_excerpt(); ?></div>
                    </article>
              <?php endwhile;
                else:
              ?>
              <p>Nothing to display</p>
              <?php endif; ?>

          </div>
        </main>
      </div>
<?php get_footer(); ?>
