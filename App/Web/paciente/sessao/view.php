<?=$this->layout('themes/index', ['title' => $title]);?>

<?php 
 if($conta > 0):
?>

<h2 class="">Sessoes</h2>

<?php 
 if($contaSessao > 0):
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Data</th>
      <th scope="col">Inicio</th>
      <th scope="col">Final</th>
      <th scope="col">Cronometro</th>
      <th scope="col">Opção</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     foreach($sessoes as $sessao):
    ?>
    <tr>
       <th scope="row"><?=$sessao['id']?></th>
       <th><?=date("d/m/Y", strtotime($sessao['data']))?></th>
       <th><?=$sessao['horaInicio']?></th>
       <th><?=$sessao['horaFinal']?></th>
       <th><?=$sessao['cronometro']?></th>
       <th>
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$sessao['id']?>">
            Mais detalhes
        </button>
       </th>
    </tr>

     <!-- Modal -->
<div class="modal fade" id="exampleModal<?=$sessao['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Anotação</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <dl class="row">
        <dd class='col-sm-9'><?=$sessao['anotacao']?></dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

    <?php 
     endforeach;
    ?>
  </tbody>
</table>

<?php 
else:
?>

<h2> Nenhuma sessão encontrada para paciente: <?=$dados['nome']?></h2>

<?php 
endif;
?>

<?php 
else:
?>

<?php 
 include_once("App/Web/paciente/notfound/404.php");
?>

<?php 
 endif;
?>

