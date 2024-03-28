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
                                    <?=fichaAnamnese($dados['id'])?>
                                    <a href="<?=routerConfig()?>/pacientes/sessao/criar/<?=$dados['id']?>" target="_blank" class="btn btn-primary btn-sm btn-rounded">
                                      Criar Sessão
                                    </a>
                                    <a href="<?=routerConfig()?>/pacientes/sessoes/<?=$dados['id']?>" target="_blank" class="btn btn-primary btn-sm btn-rounded">
                                      Sessões
                                    </a>
                                    </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card" style="<?=$style?>">
					<form action="<?=routerConfig()?>/pacientes/editar/<?=$dados['id']?>" method="POST">

          	
              <div class="card-body">
                          <h5 class="d-flex text-center mb-3">Dados Paciente</h5>
                
                          
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Nome</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="nome" class="form-control" value="<?=$dados['nome']?>">
                  </div>
                </div>
                              
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Cpf</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" id="cpf" name="cpf" class="form-control" value="<?=$dados['cpf']?>">
                  </div>
                </div>
                              
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Data Nascimento</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="date" name="dataNasc" id="dataNascimento" value="<?=$dados['dataNasc']?>" class="form-control" >
                  </div>
                </div>
                              
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Idade</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" id="idade" name="idade" class="form-control" value="<?=$dados['idade']?>">
                  </div>
                </div>
                              
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Celular</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="celular" name="celular" id="celular" class="form-control" value="<?=$dados['celular']?>">
                  </div>
                </div>
                              
                              <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">E-mail</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="email" name="email" class="form-control" value="<?=$dados['email']?>">
                  </div>
                </div>
                              
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">CEP</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="cep" id="cep" class="form-control" value="<?=$dados['cep']?>">
                  </div>
                </div>
                              <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Estado</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="uf" id="uf" class="form-control" value="<?=$dados['estado']?>">
                  </div>
                </div>
                  <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Cidade</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="cidade" id="cidade" class="form-control" value="<?=$dados['cidade']?>">
                  </div>
                </div>
                              <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Bairro</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="bairro" id="bairro" class="form-control" value="<?=$dados['bairro']?>">
                  </div>
                </div>
                              <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Endereço</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="endereco" id="endereco" class="form-control" value="<?=$dados['endereco']?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="text-secondary">
                    <button  class="btn btn-primary px-4" id="BloquearEditarPaciente" onclick="BloquearEditarPaciente()">Salvar</button>
                  </div>
                </div>
              </div>
            </form>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Responsavel</h1>
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
            <button class="btn btn-primary" id="bloquearBotao" onclick="bloquear()">Cadastrar</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Avatar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?=routerConfig()?>/pacientes/cadastrar/enviar/foto/avatar/<?=$dados['id']?>" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        

        <div class="row mb-3">
             <label for="card_paciente" class="col-sm-2 col-form-label">Foto</label>
             <div class="col-sm-10">
                <input type="file" class="form-control" name="foto" accept="image/*" required>
             </div>
          </div>
            
        
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <a href="<?=routerConfig()?>/pacientes/cadastrar/avatar/<?=$dados['id']?>" class="btn btn-danger">Tirar Foto</a>
            <button  class="btn btn-primary" id="bloquearBotao2" onclick="bloquear2()">Cadastrar</button>
          </div>
        </form>
    </div>
  </div>
</div>

<?=validateSession("CadastrarResponsavel")?>
<?=validateSession("EditarResponsavel")?>
<?=validateSession("EditarPaciente")?>
<?=validateSession("enviarFoto")?>



<script>
     $('#celular').mask("(99) 9 9999-9999");
     $('#cpf').mask("999.999.999-99");
     $('#cep').mask("99999-999");

     $(document).ready(function () {
            $("#cep").blur(function () {
                const cep = $(this).val().replace(/\D/g, ''); // Remove caracteres não numéricos

                if (cep.length !== 8) {
                    alert("CEP inválido. Certifique-se de inserir 8 números.");
                    return;
                }

                $.get(`https://viacep.com.br/ws/${cep}/json/`, function (data) {
                    $("#endereco").val(data.logradouro);
                    $("#bairro").val(data.bairro);
                    $("#cidade").val(data.localidade);
                    $("#uf").val(data.uf);
                })
                .fail(function () {
                    console.error("Erro ao buscar CEP.");
                });
            });
        });

        document.getElementById('dataNascimento').addEventListener('change', function (){
        let dataNascimento = new Date(this.value)
        let dataAtual = new Date()
        let diferenca = dataAtual - dataNascimento
        let idade = Math.floor(diferenca / (1000 * 60 * 60 * 24 * 365.25))
        document.getElementById('idade').value = idade
    })
  
  function bloquear(){
      var botao = document.getElementById("bloquearBotao");
      botao.disabled = true;
      
      setTimeout(function() {
        botao.form.submit();
      }, 100);
    }

    function bloquear2(){
      var botao = document.getElementById("bloquearBotao2");
      botao.disabled = true;
      
      setTimeout(function() {
        botao.form.submit();
      }, 100);
    }

    function BloquearEditarPaciente(){
      var botao = document.getElementById("BloquearEditarPaciente");
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