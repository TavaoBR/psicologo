<?=$this->layout('themes/index', ['title' => $title]); $temaColor = configTemaColor();?>

<section>
<div class="container">

<h2 class="text-bold">Agendar</h2>

    <div class="row">

    <?=validateSession("CadastrarAgenda")?>

    <form  action="<?=routerConfig()?>/agenda/agendar" method="POST"> 
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">
                    <ol class="activity-checkout mb-0 px-4 mt-3">
                        <li class="checkout-item">
                            <div class="feed-item-list">
                                <div>
                                    <h5 class="font-size-16 mb-1">Data</h5>
                                    <div class="mb-3">
                                        
                                            <div>
                                                <div class="row">

                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">Paciente/Cpf</label>
                                                        <select name="cpf" id="" class="form-control">
                                                             <option value="">Selecione uma opção</option>
                                                             <?php 
                                                               foreach($data as $paciente):
                                                             ?>
                                                                <option value="<?=$paciente['cpf']?>"><?=$paciente['cpf']?></option>
                                                             <?php 
                                                              endforeach;
                                                             ?>
                                                        </select>
                                                    </div>
                                                    </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">Data</label>
                                                         <input type="date" name="data" class="form-control" value="<?=dataAtualFront()?>">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">Hora Inicial</label>
                                                         <input type="time" name="inicio" class="form-control" id="horaInicio" onchange="ajustarHoraFinal()">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4" id="FinalHora" style="display: none;">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">Hora Final</label>
                                                         <input type="time" name="final" class="form-control" id="horaFinal" >
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
                      <button type="submit" id="bloquearBotao" onclick="bloquear()" class="btn btn-primary">Agendar</button>                    </div>
                </div> <!-- end col -->
            </div> <!-- end row-->
        </div>
      </form>
    </div>
    <!-- end row -->
    
</div>
</section>


<script>
             function ajustarHoraFinal() {
            var horaInicio = document.getElementById('horaInicio').value;
            var inicio = new Date('1970-01-01T' + horaInicio + ':00');
            
            // Adiciona +1 hora à hora inicial
            inicio.setHours(inicio.getHours() + 1);
            
            // Formata a hora final no formato HH:MM
            var horaFinal = ('0' + inicio.getHours()).slice(-2) + ':' + ('0' + inicio.getMinutes()).slice(-2);
            
            document.getElementById('FinalHora').style = "block"
            // Define o valor da hora final no campo de entrada
            document.getElementById('horaFinal').value = horaFinal;
        }
</script>


<script>
    function bloquear(){
      var botao = document.getElementById("bloquearBotao");
      botao.disabled = true;
      
      setTimeout(function() {
        botao.form.submit();
      }, 100);
    }
</script>
