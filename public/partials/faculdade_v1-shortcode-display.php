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

        campo_inscricao_front();
        die();

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
          <label>Quem indicou</label><br>
         <select name="indicou" class="form-control input-lg">
                                                                          <option value="Selecionar" selected="selected">Selecionar</option>
                                                                          <option value="Outdoor">Outdoor</option>
                                                                          <option value="Rádio  Coronel Sapucaia FM">Rádio  Coronel Sapucaia FM</option>
                                                                          <option value="Rádio Aral Moreira FM">Rádio Aral Moreira FM</option>
                                                                          <option value="Rádio 96,9 Nova FM">Rádio 96,9 Nova FM</option>
                                                                          <option value="Rádio 100,5 Amambay FM">Rádio 100,5 Amambay FM</option>
                                                                          <option value="Rádio 104,9 Lider FM">Rádio 104,9 Lider FM</option>
                                                                          <option value="Rádio B Vista FM">Rádio B Vista FM</option>
                                                                          <option value="Jornal De Noticias">Jornal De Noticias</option>
                                                                          <option value="Jornal Regional">Jornal Regional</option>
                                                                          <option value="Jornal Da Praça">Jornal Da Praça</option>
                                                                          <option value="Folder">Folder</option>
                                                                          <option value="Panfleto">Panfleto</option>
                                                                          <option value="Cartaz">Cartaz</option>
                                                                          <option value="Bus ">Bus - Door (Onibus)</option>
                                                                          <option value="Amigos">Amigos/Conhecidos</option>
                                                                          <option value="Internet">Internet</option>
                                                                          <option value="Outros">Outros</option>

      </select>

        <input type="text" name="cep" id="cep" class="form-control input-lg" placeholder="CEP">
        <input type="text" name="tel_fixo" id="tel_fixo" class="form-control input-lg" placeholder="Tel. Fixo: (99) 9999.9999">
        <input type="text" name="celular" id="celular" class="form-control input-lg" placeholder="Cel.: (99) 9999.9999">
         <input type="text" name="instituicao_estuda" id="instituicao_estuda" class="form-control input-lg" placeholder="Insira o nome da instituição aqui">

         <select name="uf" class="form-control input-lg">
                                                                          <option value="AC">AC</option>
                                                                          <option value="AL">AL</option>
                                                                          <option value="AM">AM</option>
                                                                          <option value="AP">AP</option>
                                                                          <option value="BA">BA</option>
                                                                          <option value="CE">CE</option>
                                                                          <option value="DF">DF</option>
                                                                          <option value="ES">ES</option>
                                                                          <option value="GO">GO</option>
                                                                          <option value="MA">MA</option>
                                                                          <option value="MG">MG</option>
                                                                          <option value="MS" selected="selected">MS</option>
                                                                          <option value="MT">MT</option>
                                                                          <option value="PA">PA</option>
                                                                          <option value="PB">PB</option>
                                                                          <option value="PE">PE</option>
                                                                          <option value="PI">PI</option>
                                                                          <option value="PR">PR</option>
                                                                          <option value="RJ">RJ</option>
                                                                          <option value="RN">RN</option>
                                                                          <option value="RO">RO</option>
                                                                          <option value="RR">RR</option>
                                                                          <option value="RS">RS</option>
                                                                          <option value="SC">SC</option>
                                                                          <option value="SE">SE</option>
                                                                          <option value="SP">SP</option>
                                                                          <option value="TO">TO</option>
      </select>


        <input type="submit" name="submit">

</form>

