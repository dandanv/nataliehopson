<?php //get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php
  $args = array(
    'post_type' => 'work',
    'posts_per_page' => -1,
    'post_status' => 'publish'
  );
  $query = new WP_Query( $args );
?>
<?php if ( $query->have_posts() ) : ?>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>


  <div class="module--wrapper">
    <div class="module--slider js--slider slider-1">
      <div class="container">
        <?php 
          $gallery = get_field('gallery',$post->ID); 
        ?>
        <?php foreach ($gallery as $image ) : ?>
        <?php $padBot = $image['height'] / $image['width'] * 100; ?>
        <div class="module--slider_item">
          <div class="module--slider_img">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <?php
        $list = get_field('list',$post->ID);
      ?>

      <div class="module--slider_content">
        <div class="row">
          <div class="col">
            <?php the_content(); ?>
          </div>
          <div class="col">
            <?php
              foreach ($list as $primListItem ) : 

                $primListTitle = $primListItem['primary_list_title'];
                $subList = $primListItem['list_item'];
            ?>
              <?php if( $primListTitle ) : ?>
              <h3><?php echo $primListTitle; ?></h3>
              <?php endif; ?>

              <?php if( $subList && isset($subList) ) : ?>
              <ul>
              <?php foreach ($subList as $subListItem ) : ?>
                <?php if( $subListItem['list_item_title'] ) : ?>
                <li><?php echo $subListItem['list_item_title']; ?></li>
                <?php endif; ?>
              <?php endforeach; ?>
              </ul>
              <?php endif; ?>

            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="module--slider_meta">
      <h2><?php echo get_the_title($post->ID); ?></h2>
      <span>Category</span>
      <button class="learn_more">Learn More</button>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
