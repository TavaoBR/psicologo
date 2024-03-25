<?=$this->layout('themes/index', ['title' => $title]);$temaColor = configTemaColor();?>

<link rel="stylesheet" href="<?=Assests("assets/css/form$temaColor.css")?>">

<section>
<div class="container-fluid">

<h2 class="text-bold">Cadastro Ficha Anamnese</h2>

    <div class="row">

    <?=validateSession("CadastroAnamnese")?>

    <form  action="<?=routerConfig()?>/pacientes/cadastrar/anamnese/<?=$data['id']?>" method="POST"> 
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">
                    <ol class="activity-checkout mb-0 px-4 mt-3">
                        <li class="checkout-item">
                            <div class="avatar checkout-icon p-1">
                                <div class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bxs-receipt text-white font-size-20"></i>
                                </div>
                            </div>
                            <div class="feed-item-list">
                                <div>
                                    <h5 class="font-size-16 mb-1">Anamnese</h5>
                                    <div class="mb-3">
                                        
                                            <div>
                                                <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">MOTIVO DA CONSULTA</label>
                                                        <textarea class="form-control" name="motivo" rows="5" ><?=validateSession("Motivo")?></textarea>
                                                    </div>
                                                    </div>

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">HISTORICO DO PRO</label>
                                                        <textarea class="form-control" name="historico"  rows="5" ><?=validateSession("Historico")?></textarea>
                                                    </div>
                                                </div>

                                                    <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">IMPACTO BIOGRAFICO</label>
                                                        <textarea class="form-control" name="impacto" rows="5" ><?=validateSession("Impacto")?></textarea>
                                                    </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">INFÂNCIA</label>
                                                        <textarea class="form-control" name="infancia" rows="5" ><?=validateSession("Infância")?></textarea>
                                                    </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">EXPECTATIVAS</label>
                                                        <textarea class="form-control" name="expectativas" rows="5" ><?=validateSession("Expectativas")?></textarea>
                                                    </div>
                                                    </div>

                                                </div>


                                            </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row my-4"> <!-- end col -->
                <div class="col">
                    <div class="mt-2 mt-sm-0">
                      <button type="submit" id="bloquearBotao" onclick="bloquear()" class="btn btn-primary">Cadastrar</button>                    </div>
                </div> <!-- end col -->
            </div> <!-- end row-->
        </div>
      </form>
    </div>
    <!-- end row -->
    
</div>
</section>



<script>
    function bloquear(){
      var botao = document.getElementById("bloquearBotao");
      botao.disabled = true;
      
      setTimeout(function() {
        botao.form.submit();
      }, 100);
    }
</script>

