<!doctype html>
<html  class="h-full" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

  </head>

  <body <?php body_class("h-full"); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <!-- start index app -->
    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>
    <!-- end index app -->

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
<html>
