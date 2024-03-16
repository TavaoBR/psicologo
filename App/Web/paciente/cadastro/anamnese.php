<?=$this->layout('themes/index', ['title' => $title]);$temaColor = configTemaColor();?>

<link rel="stylesheet" href="<?=Assests("assets/css/form$temaColor.css")?>">

<section>
<div class="container">

<h2 class="text-bold">Cadastro Ficha Anamnese</h2>

    <div class="row">

    <form method="post" action="#">
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
                                                        <textarea class="form-control"  rows="5" ></textarea>
                                                    </div>
                                                    </div>

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">HISTORICO DO PRO</label>
                                                        <textarea class="form-control"  rows="5" ></textarea>
                                                    </div>
                                                </div>

                                                    <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">IMPACTO BIOGRAFICOs</label>
                                                        <textarea class="form-control"  rows="5" ></textarea>
                                                    </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">INFANCIA</label>
                                                        <textarea class="form-control"  rows="5" ></textarea>
                                                    </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">EXPECTATIVAS</label>
                                                        <textarea class="form-control"  rows="5" ></textarea>
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

