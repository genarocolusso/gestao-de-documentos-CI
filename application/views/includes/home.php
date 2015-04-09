<section class="navbarra">
	<div class="row">

		    <h2 class="left"><i class="fa fa-desktop"></i> <?php  echo anchor('pages/index', 'Gerenciador de Arquivos', 'title="Gerenciador de arquivo"'); ?>   </h2>
			 
				<div class="button  small right"    data-reveal-id="myModal">Adicionar</div> 

		 
		 

	</div>
</section>
<section class="archivesection">
<div class="row">
	

	 	<div class="large-8 column">
	 	<h2 class="white">Bem vindo !</h2>
		<h4 class="white">Faça uma pesquisa pelo arquivo desejado usando os filtros apropriados</h4>
	 	<div class="row">
   	
   	<div class="large-9 columns">
	 	<div class="row collapse">
	 		<div class="small-1 columns">
          <span class="prefix">ID</span>
        </div>
        <div class="small-9 columns">
          <input type="text" placeholder="Buscar" type="search" id="buscaaqui">
        </div>
        <div class="small-2 columns">
          <a href="#" class="button postfix" id="busca2">Buscar</a>
        </div>
      </div>
        </div>

 		 </div>
  		</div>
		<div class="large-4 column text-center">
			<i class="fa fa-archive fa-5x archiveicon"></i>
		</div>

	</div>
</section> 
 <section class="separatorphrase">
  
 	<?php 
  echo $this->session->flashdata('message_name');
  $this->session->sess_destroy();
 	?>
 	 
 </section>
<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 class="text-center">Adicionar Arquivo</h2>
     
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>

  <?php echo form_open_multipart('Formbutton/enviar'); ?>
  <div class="row">
   	<div class="large-6 large-centered columns ">
	  	 
        <div class="small-12 columns">
         <label>Fundo documental      
         </label> <?php echo form_input(array('id' => 'fd', 'name' => 'fd', "required"=>"")); ?>
        </div>

        <div class="small-12 columns">
         <label>Seção      
         </label> <?php echo form_input(array('id' => 'secao', 'name' => 'secao', "required"=>"")); ?>
        </div>

        <div class="small-12 columns">
         <label>Subseção      
         </label> <?php echo form_input(array('id' => 'subsecao', 'name' => 'subsecao', "required"=>"")); ?>
        </div>

        <div class="small-12 columns">
         <label>Série      
         </label> <?php echo form_input(array('id' => 'serie', 'name' => 'serie', "required"=>"")); ?>
        </div>

        <div class="small-12 columns">
         <label>Subsérie      
         </label> <?php echo form_input(array('id' => 'subserie', 'name' => 'subserie', "required"=>"")); ?>
        </div>

        <div class="small-12 columns">
         <label>Tipo do Documento      
         </label> <?php echo form_input(array('id' => 'tipodoc', 'name' => 'tipodoc', "required"=>"")); ?>
        </div>

        <div class="small-12 columns">
         <label>Data      
         </label> <?php echo form_input(array('id' => 'data', 'name' => 'data', "required"=>"", "type"=>"date")); ?>
        </div>

 	
        <div class="small-12 columns">
        <label>Arquivo      
        </label> 
          <?php echo form_input(array('id' => 'archive', 'name' => 'arquivo', "required"=>"", "type"=>"file")); ?>

        </div>

        <div class="small-12 columns">
        <input class="button success small "  type="submit" value="Adicionar"/> 
     	</div>
    </div>
  
  </div>
			<?php echo form_close();?>
</div>
<div class="row">
	<?php 

	$query = $this->db->get('caixas');
	echo "<ul class='medium-block-grid-3 small-block-grid-1  text-center ' id='arquivados'>";
foreach ($query->result() as $row)
{   
    echo "<li class='arquivado".$row->id ."'><div class='archivecard'>";
 
 	echo '<i class="fa fa-file fa-2x "> '.$row->id .'</i>';
    echo "<h3>".$row->fd ."</h3>";
    echo "<p>".$row->secao."</p>";
   echo "<p>".$row->subsecao."</p>";
   echo "<p>".$row->serie."</p>";
   echo "<p>".$row->subserie."</p>";
   echo "<p>".$row->tipodocumento."</p>";
   echo "<p><img src='".base_url()."uploads/".$row->arquivo.".jpg' class='img-arquivo'></p>";
   echo "<p>".$row->keyword."</p>";
   echo "<p>".$row->data."</p> ";
   	echo '<i class="fa fa-trash   button small  lixo"> </i></div></li> ';
} 
    echo "</ul>";

?>
</div>