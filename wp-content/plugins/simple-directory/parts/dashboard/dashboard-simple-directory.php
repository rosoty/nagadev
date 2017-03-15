<?php

/*

Title: Simple Directory
Capability: manage_options

Network: true

*/

include_once( ABSPATH . WPINC . '/feed.php' );



$rss = fetch_feed('http://contexta.ca/feed/');



if (!is_wp_error($rss)) :



    $maxitems = $rss->get_item_quantity(5);



    $rss_items = $rss->get_items(0, $maxitems);



endif;

?>

<div class="published" style="text-align:center;">

<p><strong>You currently have</strong></p>
<h2 style="color:red;"><?php $count_listings = wp_count_posts('listing');
echo $count_listings->publish;?></h2>
<p><strong>listings published on your site. Way to go!</strong></p>
</div>


<hr/>
<div style="width:100%;display:block;">
<h2>Latest News</h2>
<div class="rss-widget" style="padding-left:5px;padding-right:5px;">



  <ul>



      <?php if ($maxitems == 0) : ?>



          <li>



            <?php _e('No items', 'simple-dir'); ?>



          </li>



      <?php else : ?>



          <?php foreach ($rss_items as $item) : ?>



              <?php $title = esc_html($item->get_title()); ?>



              <?php $date = date_i18n(get_option('date_format'), $item->get_date('U')); ?>



              <?php

                $description = str_replace(array("\n", "\r"), ' ', esc_attr(strip_tags( @html_entity_decode($item->get_description(), ENT_QUOTES, get_option('blog_charset')))));

                $description = wp_html_excerpt( $description, 360 );



                if ('[...]' == substr( $description, -5 ))

                {

                  $description = substr($description, 0, -5) . '[&hellip;

                  ]';

                }

                elseif ('[&hellip;]' != substr($description, -10 ))

                {

                  $description .= ' [&hellip;]';

                }



                $description = esc_html( $description );

              ?>



              <?php

                $link = $item->get_link();

                while (stristr($link, 'http') != $link)

                {

                  $link = substr($link, 1);

                }

                  $link = esc_url(strip_tags($link));

              ?>



              <li>



                <a class='rsswidget' href='<?php echo esc_url($link); ?>' title='<?php echo $description;?>'>

                  <?php echo esc_html($title); ?>

                </a>



                <span class="rss-date">

                  <?php echo esc_html($date); ?>

                </span>



                <div class="rss-summary">

                  <?php echo esc_html($description); ?>

                </div>



              </li>



          <?php endforeach; ?>



      <?php endif; ?>



  </ul>



</div>
</div>


<hr>
