<?=$this->layout('themes/index', ['title' => $title]);?>


<?php 
if($conta > 0):
    if(configTemaColor() == 'Dark'){
        $style = "background-color: #1A1919; color:#eee;";
        $text = "text-white";
      }else{
        $text = "text-secondary";
      }
?>

<style>
    .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-clip: border-box;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
}
.me-2 {
    margin-right: .5rem!important;
}
</style>

<div class="container-fluid">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card" style="<?=$style?>">
						<div class="card-body" style="<?=$style?>">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="
                                 <?php 
                                  if($dados['avatar'] == null || $dados['avatar'] == ""):
                                 ?>
                                   https://static-00.iconduck.com/assets.00/profile-default-icon-512x511-v4sw4m29.png
                                 <?php 
                                  else:
                                 ?>
                                  <?=routerConfig()?>/Public/assets/img/paciente/<?=$dados['id']?>/<?=$dados['avatar']?>
                                 <?php 
                                  endif;
                                 ?>
                                " alt="Admin" class="rounded-circle p-1 " width="110">
								<div class="mt-3">
									<h4><?=$dados['nome']?></h4>
									<p class="<?=$text?> mb-1"><?=$dados['idade']?> anos</p>
									<p class="<?=$text?> font-size-sm"><?=$dados['endereco']?></p>
                                    <p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-user-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <i class="fa-solid fa-camera-retro"></i>
                                    </button>
                                    </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card" style="<?=$style?>">
						<div class="card-body">
                        <h5 class="d-flex text-center mb-3">Dados Paciente</h5>
                        
                        <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Nome</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?=$dados['nome']?>">
								</div>
							</div>
                            
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Cpf</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?=$dados['cpf']?>">
								</div>
							</div>
                            
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Data Nascimento</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="date" value="<?=$dados['dataNasc']?>" class="form-control" >
								</div>
							</div>
                            
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Idade</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?=$dados['idade']?>">
								</div>
							</div>
                            
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Celular</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="celular" class="form-control" value="<?=$dados['celular']?>">
								</div>
							</div>
                            
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">E-mail</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="email" class="form-control" value="<?=$dados['email']?>">
								</div>
							</div>
                            
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">CEP</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?=$dados['cep']?>">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Estado</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?=$dados['estado']?>">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Cidade</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?=$dados['cidade']?>">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Bairro</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?=$dados['bairro']?>">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Endereço</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?=$dados['endereco']?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="text-secondary">
									<button type="button" class="btn btn-primary px-4" >Salvar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card" style="<?=$style?>">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3">Dados Responsavel</h5>
                                    <div class="row">
                                         <?=listResponsaveis($dados['id'])?>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?=routerConfig()?>/pacientes/cadastrar/responsaveis/<?=$dados['id']?>" method="post">
            <div class="row mb-3">
                <label for="card_paciente" class="col-sm-2 col-form-label">Grau</label>
                <div class="col-sm-10">
                <select name="responsavel" id="responsavel" class="form-control" onchange="checkOption()" required>
                         <option value="">Selecione uma opção</option>
                         <option value="Mãe">Mãe</option>
                         <option value="Pai">Pai</option>
                         <option value="Tuto Legal">Tutor Legal</option>
                         <option value="Ele Mesmo">Ele mesmo</option>
                         <option value="Outro">Outro</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
             <label for="card_paciente" class="col-sm-2 col-form-label">Nome</label>
             <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" required>
             </div>
          </div>

          <div class="row mb-3" >
             <label for="card_paciente" class="col-sm-2 col-form-label">Celular</label>
             <div class="col-sm-10">
                <input type="text" class="form-control" id="celular" name="celular" required>
             </div>
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary" id="bloquearBotao" onclick="bloquear()">Cadastrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?=validateSession("CadastrarResponsavel")?>
<?=validateSession("EditarResponsavel")?>
<?=validateSession("EditarPaciente")?>



<script>
     $('#celular').mask("(99) 9 9999-9999");
  
  function bloquear(){
      var botao = document.getElementById("bloquearBotao");
      botao.disabled = true;
      
      setTimeout(function() {
        botao.form.submit();
      }, 100);
    }


    function checkOption() {
        var selectBox = document.getElementById("responsavel");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var nomeInput = document.getElementById("nome");
        var celular = document.getElementById("celular");

        if (selectedValue === "Ele Mesmo") {
            nomeInput.value = "<?=$dados['nome']?>";
            celular.value = "<?=$dados['celular']?>";
            //nomeInput.disabled = true; // Opcional: desabilita o campo de texto para evitar alterações
        } else {
            nomeInput.value = "";
            celular.value = ""; // Limpa o campo se outra opção for selecionada
            //nomeInput.disabled = false; // Garante que o campo de texto esteja habilitado
        }
    }
</script>


<?php 
 else:
include_once("App/Web/paciente/notfound/404.php");
 
 endif;
?>