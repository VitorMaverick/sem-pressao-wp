<?php get_header(); ?>
<div class="content-area">
  <main>
    <div class="container">
      <div class="error-404">
        <header>
          <h1>Page bot found</h1>
          <p>Unfotunately, the page treied ro reach does not exist on this site</p>
        </header>
        <?php
          the_widget('WP_Widget_Recent_Posts',
          array(
            'title'=>'Take a look at Latest Posts',
            'number'=>3,
          )); ?>
      </div>
    </div>
  </main>
</div>
