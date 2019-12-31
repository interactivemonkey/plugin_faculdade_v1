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
wp_nonce_field( $this->plugin_name, 'endereco_aluno' );
?>

<div class="row">
        <!-- ///////  NOME COMPLETO  /////////////////// -->
        <?php

                $atts                   = array();
                $atts['class']          = 'form-control';
                $atts['description']    = '';
                $atts['id']             = 'nome-aluno';
                $atts['label']          = 'Nome Completo';
                $atts['name']           = 'nome-aluno';
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
        <!-- ///////  NOME COMPLETO /////////////////// -->

       <!-- ///////  Data de Nascimento /////////////////// -->
       <?php

                $atts                   = array();
                $atts['class']          = 'form-control';
                $atts['description']    = '';
                $atts['id']             = 'data-nasc';
                $atts['label']          = 'Data de Nascimento';
                $atts['name']           = 'data-nasc';
                $atts['type']           = 'date';
                $atts['value']          = '';

                if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                       $atts['value'] = $this->meta[$atts['id']][0];
                }

                apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

       ?>

        <div class="col-4">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-date.php' ); ?>
        </div>
        <!-- ///////  Data de Nascimento /////////////////// -->


        <!-- ///////  E-MAIL  /////////////////// -->
       <?php

                $atts                   = array();
                $atts['class']          = 'form-control';
                $atts['description']    = '';
                $atts['id']             = 'email-alun';
                $atts['label']          = 'Email';
                $atts['name']           = 'email-alun';
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
        <!-- ///////  E-MAIL /////////////////// -->

</div>

<div class="row" style="margin-top: 20px">

        <!-- ///////  CPF  /////////////////// -->
       <?php

                $atts                   = array();
                $atts['class']          = 'form-control';
                $atts['description']    = '';
                $atts['id']             = 'cpf-alun';
                $atts['label']          = 'CPF';
                $atts['name']           = 'cpf-alun';
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
        <!-- ///////  CPF  /////////////////// -->

        <!-- ///////  RG  /////////////////// -->
       <?php

                $atts                   = array();
                $atts['class']          = 'form-control';
                $atts['description']    = '';
                $atts['id']             = 'rg-alun';
                $atts['label']          = 'RG';
                $atts['name']           = 'rg-alun';
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
        <!-- ///////  RG  /////////////////// -->

         <!-- ///////  ENDEREÇO  /////////////////// -->
       <?php

                $atts                   = array();
                $atts['class']          = 'form-control';
                $atts['description']    = '';
                $atts['id']             = 'ender-aluno';
                $atts['label']          = 'Endereço';
                $atts['name']           = 'ender-aluno';
                $atts['placeholder']    = 'endereco';
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
        <!-- ///////  ENDEREÇO  /////////////////// -->


</div>


<div class="row" style="margin-top: 20px">

          <!-- ///////  NUMERO  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'end-numero';
              $atts['label']          = 'Numero';
              $atts['name'] = 'end-numero';
              $atts['placeholder']    = 'numero';
              $atts['type']           = 'text';
              $atts['value']          = '';

              if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                  $atts['value'] = $this->meta[$atts['id']][0];
              }

              apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );
        ?>

        <div class="col-2">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-text.php' ); ?>
       </div>

       <!-- ///////  NUMERO  /////////////////// -->


         <!-- ///////  BAIRRO  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'end-bairro';
              $atts['label']          = 'Bairro';
              $atts['name'] = 'end-bairro';
              $atts['placeholder']    = 'bairro';
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

       <!-- ///////  BAIRRO  /////////////////// -->

        <!-- ///////  CIDADE  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'end-cidade';
              $atts['label']          = 'Cidade';
              $atts['name'] = 'end-cidade';
              $atts['placeholder']    = 'cidade';
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

       <!-- ///////  CIDADE  /////////////////// -->

       <!-- ///////  ESTADO  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'end-estado';
              $atts['label']          = 'Estado';
              $atts['name'] = 'end-estado';
              $atts['placeholder']    = 'estado';
              $atts['type']           = 'text';
              $atts['value']          = '';

              if ( ! empty( $this->meta[$atts['id']][0] ) ) {
                  $atts['value'] = $this->meta[$atts['id']][0];
              }

              apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );
        ?>

        <div class="col-2">
               <?php include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-text.php' ); ?>
       </div>

       <!-- ///////  ESTADO  /////////////////// -->

</div>

<div class="row" style="margin-top: 20px">

       <!-- ///////  CEP  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'end-cep';
              $atts['label']          = 'CEP';
              $atts['name'] = 'end-cep';
              $atts['placeholder']    = 'cep';
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

       <!-- ///////  CEP  /////////////////// -->


       <!-- ///////  TELEFONE FIXO  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'tel-fixo';
              $atts['label']          = 'Telefone Fixo';
              $atts['name'] = 'tel-fixo';
              $atts['placeholder']    = 'telefone';
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

       <!-- ///////  TELEFONE FIXO  /////////////////// -->

        <!-- ///////  CELULAR  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'celular-aluno';
              $atts['label']          = 'Celular';
              $atts['name'] = 'celular-aluno';
              $atts['placeholder']    = 'celular';
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

       <!-- ///////  CELULAR  /////////////////// -->

</div>

<div class="row" style="margin-top: 20px">

       <!-- ///////  EVENTO  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'evento-inscri';
              $atts['label']          = 'Evento';
              $atts['name'] = 'evento-inscri';
              $atts['placeholder']    = 'evento';
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

       <!-- ///////  EVENTO  /////////////////// -->

        <!-- ///////  INSTITUTO  /////////////////// -->

        <?php
              $atts                   = array();
              $atts['class']          = 'form-control';
              $atts['description']    = '';
              $atts['id']             = 'institu-estudou';
              $atts['label']          = 'Insttituição que Estuda/Estudou';
              $atts['name'] = 'institu-estudou';
              $atts['placeholder']    = 'Insttituição que Estuda/Estudou';
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

       <!-- ///////  INSTITUTO  /////////////////// -->

</div>