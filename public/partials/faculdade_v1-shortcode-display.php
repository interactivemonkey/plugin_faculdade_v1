<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       interactivemoney.com.br
 * @since      1.0.0
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h4><?php // echo($args['quotes-title']) ?></h4>
<?php
    $options = get_option('faculdade_v1');
    if($options['quo-title']){
    echo('<h4>' . $args['quotes-title'] . '</h4>');
    }
?>
<ul>
<?php foreach ( $items as $item ) { ?>
  <li><b><?php echo ($item->post_title) ?></b> <?php echo($item->post_content) ?> </li>
<?php } ?>
</ul>
