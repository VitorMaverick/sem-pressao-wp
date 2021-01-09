<article id="blog-posts" class="artigo">
  <div class="card flex-lg-row  h-md-250 wow bounceInUp" data-wow-duration="1.4s">
    <div class="post-thumbnail">
      <?php
        if(has_post_thumbnail()){
          //tamanho definido por post_thumbnail_size()
          the_post_thumbnail('tema1-blog',array('class'=>' card-img-right d-flex d-none '));

        }else{
          ?>
          <img class="card-img-right flex-auto d-none d-lg-block" src="https://i.picsum.photos/id/1039/6945/4635.jpg?hmac=tdgHDygif2JPCTFMM7KcuOAbwEU11aucKJ8eWcGD9_Q" data-holder-rendered="true">
          <?php
        }
       ?>
       <div class="details text-center">
         <div class="content ">
           <p class="text-center">
           <a href="http://twitter.com/intent/tweet?text=<?php the_title();?>&url=<?php the_permalink();?>&via=seunomenotwitter" title="Twittar sobre <?php the_title();?>" target="_blank"><i class="fa fa-twitter"></i></a>
           </p>
         </div>
       </div>
    </div>
    <div class="card-body d-flex flex-column align-items-start">
      <h3 class="mb-0"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
      <div class="meta text-muted mb-1">
        <p class="">Publicado por <?php the_author_posts_link();?> em
          <a href="<?php the_permalink() ?>"><?php echo get_the_date();?></a>
          <?php if (has_category()): ?>
            <br>
            Categorias: <?php the_category(' '); ?>
          <?php endif; ?>
          <?php if(has_tag()): ?>
            Tags: <span><?php the_tags('',','); ?></span>
          <?php endif; ?>
        </p>
      </div>
      <div class="content card-content">
         <p class="card-text mb-auto"> <?php the_excerpt(); ?></p>
         <a href="http://twitter.com/intent/tweet?text=<?php the_title();?>&url=<?php the_permalink();?>&via=seunomenotwitter" title="Twittar sobre <?php the_title();?>" target="_blank"><i class="fa fa-twitter"></i></a>
        </div>

    </div>


  </div>


</article>
