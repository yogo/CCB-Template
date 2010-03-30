<? get_header() ?>
<?php if (have_posts()){?>

    <div class="post" id="post-<?php the_ID(); ?>">
      <h1><? the_title() ?></h1>

      <div class="entry">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>
    </div>

    <? if(comments_open()){
        comments_template();
    } ?>

<? }else{ ?>

    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>

<? } ?>

<? get_footer() ?>
