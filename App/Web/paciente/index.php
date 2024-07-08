<?=$this->layout('themes/index', ['title' => $title]);?>


<?php 
 if($conta > 0):
?>

<h2 class="text-bold">Pacientes</h2>

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Paciente</th>
      <th>Cpf</th>
      <th>Celular</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     foreach($dados as $data):
    ?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="<?=routerConfig()?>/Public/assets/img/paciente/<?=$data->id?>/<?=$data->avatar?>"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><?=$data->nome?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?=$data->cpf?></p>
      </td>
      <td><span class="fw-normal mb-1"><?=$data->celular?></span></td>
      <td>
        <a href="<?=routerConfig()?>/pacientes/perfil/<?=$data->id?>" class="btn btn-primary btn-sm btn-rounded">
          Perfil
        </a>
        <a href="<?=routerConfig()?>/pacientes/sessao/criar/<?=$data->id?>" class="btn btn-primary btn-sm btn-rounded">
         Criar Sessão
        </a>
        <a href="<?=routerConfig()?>/pacientes/sessoes/<?=$data->id?>" class="btn btn-primary btn-sm btn-rounded">
          Sessões
        </a>
      </td>
    </tr>
    <?php 
     endforeach;
    ?>
  </tbody>
</table>
<?php 
else:
?>
<?php 
 include_once("App/Web/paciente/notfound/404.php");
?>
<?php 
endif;
?>

