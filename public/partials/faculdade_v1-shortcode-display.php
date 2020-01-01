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
get_header();
?>
<?php

     if(isset($_POST['submit'])){

          $title = $_POST['title'];
          $description = $_POST['description'];

          $arg = array (

              'post_type' => 'post',
              'post_title' => $title,
              'post_content' => $description,
              'post_status' => 'publish',




          );

          wp_insert_post( $arg );

     }

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h4> formulario de inscrição aqui</h4>

<form action="" method="post">

        <label></label><br>
        <input type="text" name="title"><br><br>
         <label></label><br>
        <textarea row="10" name="description"></textarea> <br><br>
        <input type="submit" name="submit">

</form>

