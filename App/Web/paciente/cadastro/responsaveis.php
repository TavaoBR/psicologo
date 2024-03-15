<?=$this->layout('themes/index', ['title' => $title]);?>



<?php 
$temaColor = configTemaColor();
if($temaColor == 'Dark'){
  $style = "background-color: #1A1919; color:#eee;";
  $text = "text-white";
}else{
  $text = "text-primary";
}
?>

<section>
   

  <div class="container">

  <h2> Cadastrar Responsavel ou Responsaveis</h2>

    <div class="row">
      <div class="col-lg-4" >
        <div class="card mb-4" style="<?=$style?>">
          <div class="card-body text-center">
            <h4> Avatar e Dados </h4>
            <img src="<?=routerConfig()?>/Public/assets/img/paciente/<?=$data['id']?>/<?=$data['avatar']?>" alt="avatar"
              class="rounded img-fluid" style="width: 225px;">
            <h5 class="my-3"><?=$data['nome']?></h5>
            <p class=" mb-1"><?=$data['email']?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4" style="<?=$style?>">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0">
                <input type="text" class="form-control" style="border:none">
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Parentesco</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0">
                    <select name="" class="form-control">
                         <option value="">Selecione uma opção</option>
                         <option value="">Mãe</option>
                         <option value="">Pai</option>
                         <option value="">Tutor Legal</option>
                    </select>
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Celular</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0">
                <input type="text" class="form-control border-0" >
                </p>
              </div>
            </div>
          </div>
        </div>
     </div>
    </div>
  </div>
</section>