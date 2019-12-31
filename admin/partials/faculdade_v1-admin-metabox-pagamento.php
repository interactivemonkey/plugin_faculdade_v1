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

wp_nonce_field( $this->plugin_name, 'pagamento_files' );

$atts                   = array();
$atts['class']          = 'form-control';
$atts['description']    = '';
$atts['id']             = 'select-pagamento';
$atts['label']          = 'Informação sobre o pagamento';
$atts['aria']         = 'pagamento-aria';
$atts['name']           = 'select-pagamento';
$atts['selections']   = array( 'nao_pago' => 'Não Pago', 'pago'  => 'Pago');
$atts['blank']                = '';
//$atts['multiple']          = false;
//$atts['placeholder']    = 'não pago';
$atts['type']           = 'select';
$atts['value']          = '';

              if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                  $atts['value'] = $this->meta[$atts['id']][0];
              }

              apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );
        ?>

        <div class="col">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-select.php' ); ?>
       </div>


