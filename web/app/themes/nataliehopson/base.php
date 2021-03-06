<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
$myClasses = get_body_class();
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <div id="main--scrollbar">
      <div id="ajax--content" class="wrap container" role="document">
        <div class="content row">
          <main class="main">
            <?php include Wrapper\template_path(); ?>

            <?php do_action('get_footer');
            get_template_part('templates/footer'); ?>

          </main><!-- /.main -->
        </div><!-- /.content -->
      </div><!-- /.wrap -->
    </div>

    <div class="module--pointer js--pointer">
      <div class="module--pointer__data"></div>
    </div>

    <div class="module--mobile_modal">
      <div class="module--mobile_modal--content"></div>
      <button class="button close">Close</button>
    </div>

    <?php
      wp_footer();
    ?>
    
  </body>
</html>
