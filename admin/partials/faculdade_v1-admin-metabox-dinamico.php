<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       interactivemoney.com.br
 * @since      1.0.0
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/admin/partials
 */
// wp_nonce_field( $this->plugin_name, 'mini_curso' );

?>

<div class="input_fields_wrap">

           <a class="add_field_button btn btn-success">Adicionar Mini Curso</a>


    <?php
    if(isset($mytext) && is_array($mytext)) {
        $i = 1;
        $output = '';

        foreach($mytext as $text){
            //echo $text;
            $output = '<div><input type="text" style="width: 60%; font-weight: 400;
    font-size: 1rem;
    line-height: 1.5;
    padding: 0.375rem 0.75rem;
    margin-top: 10px;"  name="mytext['.$i.'][]" value="' . $text . '">';
            if( $i !== 1 && $i > 1 ) $output .= '<a href="#" style=" margin-top: 6px; margin-left:8px" class="remove_field btn btn-danger mb-2">Remove</a></div>';
            else $output .= '</div>';

            echo $output;
            $i++;
        }
    } else {
        echo '<div><input type="text" style="width: 60%; font-weight: 400; font-size: 1rem; line-height: 1.5; padding: 0.375rem 0.75rem; margin-top: 10px;"  name="mytext['.$i.']"></div>';
    }
    ?>
</div>
