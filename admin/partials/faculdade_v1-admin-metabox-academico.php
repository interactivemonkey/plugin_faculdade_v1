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
wp_nonce_field( $this->plugin_name, 'inscricao_academico' );
?>

<div class="row">
          <!-- /////// CURSO 1 OPÇÃO  /////////////////// -->
        <?php

                $atts                   = array();
                $atts['class']          = 'form-control';
                $atts['description']    = '';
                $atts['id']             = 'primeira-opcao';
                $atts['label']          = '1 Opção de curso';
                $atts['name']           = 'primeira-opcao';
                $atts['placeholder']    = '';
                $atts['type']           = 'text';
                $atts['value']          = '';

                if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                       $atts['value'] = $this->meta[$atts['id']][0];
                }

                apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

        ?>

        <div class="col-6">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-text.php' ); ?>
        </div>
        <!-- ///////  CURSO 1 OPÇÃO /////////////////// -->

       <!-- ///////  CURSO 2 OPÇÃO /////////////////// -->
       <?php

                $atts                   = array();
                $atts['class']          = 'form-control';
                $atts['description']    = '';
                $atts['id']             = 'segunda-opcao';
                $atts['label']          = '2 Opção de curso';
                $atts['name']           = 'segunda-opcao';
                $atts['placeholder']    = '';
                $atts['type']           = 'text';
                $atts['value']          = '';

                if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                       $atts['value'] = $this->meta[$atts['id']][0];
                }

                apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

       ?>

        <div class="col-6">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-text.php' ); ?>
        </div>
        <!-- ///////  CURSO 2 OPÇÃO /////////////////// -->

</div>


<div class="row" style="margin-top: 20px">

        <!-- ///////  LINGUA ESTRANGEIRA  /////////////////// -->
       <?php

                $atts                   = array();
                $atts['class']          = 'form-control';
                $atts['description']    = '';
                $atts['id']             = 'lingua-estrangeira';
                $atts['label']          = 'Lingua Estrangeira';
                $atts['name']           = 'lingua-estrangeira';
                $atts['placeholder']    = '';
                $atts['type']           = 'text';
                $atts['value']          = '';

                if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                       $atts['value'] = $this->meta[$atts['id']][0];
                }

                apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

       ?>

        <div class="col-4">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-text.php' ); ?>
        </div>
        <!-- ///////  LINGUA ESTRANGEIRA /////////////////// -->


       <!-- ///////  POSSUI NECESSIDADE ESPECIAL /////////////////// -->

        <?php
             $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'select-necessidade-espec';
              $atts['label']          = 'Necessidade especial';
              $atts['aria']         = 'necessidade-esp';
              $atts['name']           = 'select-necessidade-espec';
              $atts['selections']   = array( 'nao'  => 'Não', 'sim' => 'Sim');
              $atts['blank']                = '';
            //  $atts['multiple']          = false;
            //  $atts['autosave']      = true;
             // $atts['placeholder']    = 'não pago';
              $atts['type']           = 'select';
              $atts['value']          = '';

              if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                  $atts['value'] = $this->meta[$atts['id']][0];
              }

              apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );
        ?>

        <div class="col-4">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-select.php' ); ?>
       </div>
       <!-- ///////  POSSUI NECESSIDADE ESPECIAL  /////////////////// -->

        <!-- ///////    FILIAÇÃO  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'filiacao';
              $atts['label']          = 'Filiação';
              $atts['name'] = 'filiacao';
              $atts['placeholder']    = '';
              $atts['type']           = 'text';
              $atts['value']          = '';

              if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                  $atts['value'] = $this->meta[$atts['id']][0];
              }

              apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );
        ?>

        <div class="col-4">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-text.php' ); ?>
       </div>

       <!-- ///////  FILIAÇÃO  /////////////////// -->

</div>


<div class="row" style="margin-top: 20px">
         <!-- ///////    EXPEDIÇÃO  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'expedicao';
              $atts['label']          = 'Expedição';
              $atts['name'] = 'expedicao';
              $atts['placeholder']    = '';
              $atts['type']           = 'text';
              $atts['value']          = '';

              if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                  $atts['value'] = $this->meta[$atts['id']][0];
              }

              apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );
        ?>

        <div class="col-6">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-text.php' ); ?>
       </div>

       <!-- ///////  EXPEDIÇÃO  /////////////////// -->

        <!-- ///////    QUEM INDICOU  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'indicacao';
              $atts['label']          = 'Quem indicou';
              $atts['name'] = 'indicacao';
              $atts['placeholder']    = '';
              $atts['type']           = 'text';
              $atts['value']          = '';

              if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                  $atts['value'] = $this->meta[$atts['id']][0];
              }

              apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );
        ?>

        <div class="col-6">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-text.php' ); ?>
       </div>

       <!-- ///////  QUEM INDICOU  /////////////////// -->

</div>