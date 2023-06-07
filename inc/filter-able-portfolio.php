<?php

add_action('genesis_before_content', 'filter_able_portfolio_show');
function filter_able_portfolio_show (){
    ?>

   
<div class="container container_filter">

<div id="p-filters" class="filters filter-button-group">
          <ul><h4>
            <li class="active" data-filter="*">All</li>

        <?php
          $terms = get_terms('porfiolio_category');
          foreach ($terms as  $term) { ?>
            <li data-filter=".<?php  echo $term->slug; ?>"><?php echo $term->name; ?></li>
      <?php  }

        ?>
          
          </h4></ul>
        </div>

        <div id="portfolio-content" class="content grid">
      <?php
          $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 15
          );

          $query = new WP_Query($args);

          while ($query->have_posts()) {
            $query->the_post();

            $termsArray = get_the_terms($post->ID, 'porfiolio_category');
            

            $termsSLug = "";
            foreach ($termsArray as $term) {
              $termsSLug .= $term->slug . ' ';
            }

            ?>

            <div id="p-single-content" class="single-content <?php echo  $termsSLug; ?>  grid-item">
              <img class="p2" src="<?php the_post_thumbnail_url(); ?>">
            </div>

      <?php  }
        wp_reset_postdata();

        ?>




  </div>
</div>



    <?php

}