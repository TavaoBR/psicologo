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

  <h2> Cadastrar Responsavel </h2>
<form action="<?=routerConfig()?>/pacientes/cadastrar/responsaveis/<?=$data['id']?>" method="post">
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
        <div class="card mb-4" style="<?=$style?>" >
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0">
                  <input type="text" class="form-control" id="nome" style="border:none" name="nome" required>
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Responsavel</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0">
                    <select name="responsavel" id="responsavel" class="form-control" onchange="checkOption()" required>
                         <option value="">Selecione uma opção</option>
                         <option value="Mãe">Mãe</option>
                         <option value="Pai">Pai</option>
                         <option value="Tuto Legal">Tutor Legal</option>
                         <option value="Ele Mesmo">Ele mesmo</option>
                         <option value="Outro">Outro</option>
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
                <input type="text" class="form-control border-0" id="celular" name="celular" required>
                </p>
              </div>
            </div>
            <hr>
              <div class="row">
                  <div class="col-sm-3">
                    <div class="mb-0">
                        <button class="btn btn-primary" id="bloquearBotao" onclick="bloquear()">Cadastrar</button>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        

     </div>

    </div>
    </form>
  </div>

</section>
<?=validateSession("CadastrarResponsavel")?>

<script>
  $('#celular').mask("(99) 9 9999-9999");
  
  function bloquear(){
      var botao = document.getElementById("bloquearBotao");
      botao.disabled = true;
      
      setTimeout(function() {
        botao.form.submit();
      }, 100);
    }
</script>

<script>
  function checkOption() {
        var selectBox = document.getElementById("responsavel");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var nomeInput = document.getElementById("nome");
        var celular = document.getElementById("celular");

        if (selectedValue === "Ele Mesmo") {
            nomeInput.value = "<?=$data['nome']?>";
            celular.value = "<?=$data['celular']?>";
            //nomeInput.disabled = true; // Opcional: desabilita o campo de texto para evitar alterações
        } else {
            nomeInput.value = "";
            celular.value = ""; // Limpa o campo se outra opção for selecionada
            //nomeInput.disabled = false; // Garante que o campo de texto esteja habilitado
        }
    }
</script>