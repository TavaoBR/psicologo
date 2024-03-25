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
								<img src="<?=routerConfig()?>/Public/assets/img/paciente/<?=$dados['id']?>/<?=$dados['avatar']?>" alt="Admin" class="rounded-circle p-1 " width="110">
								<div class="mt-3">
									<h4><?=$dados['nome']?></h4>
									<p class="<?=$text?> mb-1"><?=$dados['idade']?> anos</p>
									<p class="<?=$text?> font-size-sm"><?=$dados['endereco']?></p>
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
                                            <div class="col-sm-3 mb-3">
                                                <p class="mb-0">Nome</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class=" mb-0">

                                                </p>
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <p class="mb-0">Grau Responsavel</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class=" mb-0">

                                                </p>
                                            </div>

                                            <div class="col-sm-3 mb-3">
                                                <p class="mb-0">Celular</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class=" mb-0">

                                                </p>
                                            </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php 
 else:
include_once("App/Web/paciente/notfound/404.php");
 
 endif;
?>