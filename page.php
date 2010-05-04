<? get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">
      <h1><? the_title() ?></h1>

      <div class="entry">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>
    </div>

    <? if(comments_open()){
        comments_template();
    } ?>

<?php endwhile; endif; ?>

<? get_footer() ?>
