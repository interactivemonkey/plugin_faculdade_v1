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

          $title = $_POST['nome-aluno'];
           $nome_aluno = $_POST['nome-aluno'];
            $email_aluno = $_POST['email-alun'];
            $cpf_aluno = $_POST['cpf-alun'];
            $rg_aluno = $_POST['rg-alun'];
            $end_aluno = $_POST['ender-aluno'];
            $end_numero = $_POST['end-numero'];
           $end_bairro = $_POST['end-bairro'];
           $end_cidade = $_POST['end-cidade'];

          $arg = array (

              'post_type' => 'inscricao',
              'post_title' => $title,
             // 'post_content' => $description,
              'post_status' => 'publish',

          );

          $nova_inscricao_id = wp_insert_post( $arg );

          if($nova_inscricao_id!=0)
              {
                  add_post_meta($nova_inscricao_id, 'nome-aluno', $nome_aluno);
                  add_post_meta($nova_inscricao_id, 'email-alun', $email_aluno);
                  add_post_meta($nova_inscricao_id, 'cpf-alun', $cpf_aluno);
                  add_post_meta($nova_inscricao_id, 'rg-alun', $rg_aluno);
                  add_post_meta($nova_inscricao_id, 'ender-aluno', $end_aluno);
                  add_post_meta($nova_inscricao_id, 'end-numero', $end_numero);
                  add_post_meta($nova_inscricao_id, 'end-bairro', $end_bairro);
                  add_post_meta($nova_inscricao_id, 'end-cidade', $end_cidade);

              }

     }

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h4> formulario de inscrição aqui</h4>

<form action="" method="post">

        <label>nome</label><br>
         <input type="text" name="nome-aluno" id="nome-aluno" class="form-control input-lg" placeholder="Nome completo"><br><br>
         <input type="text" name="email-alun" id="email-alun" class="form-control input-lg" placeholder="E-mail"><br><br>
         <input type="text" name="cpf-alun" id="cpf-alun" class="form-control input-lg" placeholder="CPF"><br><br>
         <input type="text" name="rg-alun" id="rg-alun" class="form-control input-lg" placeholder="RG"><br><br>
         <input type="text" name="ender-aluno" id="ender-aluno" class="form-control input-lg" placeholder="Endereço"><br><br>
          <input type="text" name="end-numero" id="end-numero" class="form-control input-lg" placeholder="Numero"><br><br>
        <input type="text" name="end-bairro" id="end-bairro" class="form-control input-lg" placeholder="Bairro"><br><br>
         <input type="text" name="end-cidade" id="end-cidade" class="form-control input-lg" placeholder="Cidade"><br><br>

        <input type="submit" name="submit">

</form>

