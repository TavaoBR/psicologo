<?=$this->layout('themes/index', ['title' => $title]);?>

<?php 
include_once("Public/assets/js/calender.php");
?>

<h2 class="font-bold">
 Agenda
</h2>

<div class="btn-group">
  <a href="<?=routerConfig()?>/agenda/agendar" target="_blank" class="btn btn-success">Novo</a>
</div>

<hr>

<?=validateSession("CadastrarAgenda")?>

<section class="container">
<div id='calendar'></div>    
</section>

<!-- Modal -->
<div class="modal fade" id="visualziarModal" tabindex="-1" aria-labelledby="visualziarModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="visualziarModalLabel">Visualizar Consulta</h1>
        <h1 class="modal-title fs-5" id="editarModalLabel" style="display:none;">Remarcar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="visualizarEvento">
        <dl class="row">
          <dt class="col-sm-3">Id:</dt>
          <dd class="col-sm-9" id="visualizar_id"></dd>

          <dt class="col-sm-3">Paciente:</dt>
          <dd class="col-sm-9" id="visualizar_paciente"></dd>
          
          <dt class="col-sm-3">Inicio:</dt>
          <dd class="col-sm-9" id="visualizar_dataStart"></dd>
        
          <dt class="col-sm-3">Fim:</dt>
          <dd class="col-sm-9" id="visualizar_dataEnd"></dd>



        </dl>

        <div class="btn-group">
            <button class="btn btn-primary" id="btnEditar">Editar</button>
          </div>
        </div>

         <div id="editarEvento" style="display: none;">
         <form method="POST" action="<?=routerConfig()?>/agenda/editar">
         <input type="hidden" name="id" id="event_id">
          <div class="row mb-3">
            <label for="card_paciente" class="col-sm-2 col-form-label">Paciente</label>
            <div class="col-sm-10">
                <input type="text" id="pacienteTitle" class="form-control" readonly>
            </div>
          </div>

          <div class="row mb-3">
             <label for="card_paciente" class="col-sm-2 col-form-label">Data</label>
             <div class="col-sm-10">
                 <input type="date" id="dataConsulta" class="form-control" name="data">
             </div>
          </div>

          <div class="row mb-3">
             <label for="card_paciente" class="col-sm-2 col-form-label">Inicio</label>
             <div class="col-sm-10">
             <input type="time" name="inicio" class="form-control" id="horaConsulta" onchange="ajustarHoraFinalEditada()">
             </div>
          </div>

          <div class="row mb-3" >
             <label for="card_paciente" class="col-sm-2 col-form-label">Fim</label>
             <div class="col-sm-10">
               <input type="time" name="final" class="form-control" id="FimConsulta" >
             </div>
          </div>


          <div class="row mb-3">
             <div class="col-sm-10">
             <button type="button" id="btnCancelar" class="btn btn-danger">Cancelar</button> 
             <button type="submit" class="btn btn-primary">Salvar</button> 
             </div>
          </div>

        </form>
         </div>

        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CadastrarModal" tabindex="-1" aria-labelledby="CadastrarModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="CadastrarModal">Agendar Consulta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?=routerConfig()?>/agenda/agendar">
          <div class="row mb-3">
            <label for="card_paciente" class="col-sm-2 col-form-label">Paciente</label>
            <div class="col-sm-10">
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

          <div class="row mb-3">
             <label for="card_paciente" class="col-sm-2 col-form-label">Data</label>
             <div class="col-sm-10">
                 <input type="date" id="dataModal1" class="form-control" name="data">
             </div>
          </div>

          <div class="row mb-3">
             <label for="card_paciente" class="col-sm-2 col-form-label">Inicio</label>
             <div class="col-sm-10">
             <input type="time" name="inicio" class="form-control" id="horaInicio" onchange="ajustarHoraFinal()">
             </div>
          </div>

          <div class="row mb-3" id="FinalHora" style="display: none">
             <label for="card_paciente" class="col-sm-2 col-form-label">Fim</label>
             <div class="col-sm-10">
               <input type="time" name="final" class="form-control" id="horaFinal" >
             </div>
          </div>

          <div class="row mb-3">
             <div class="col-sm-10">
             <button type="submit" id="bloquearBotao" onclick="bloquear()" class="btn btn-primary">Agendar</button> 
             </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

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
              function ajustarHoraFinalEditada() {
            var horaInicio = document.getElementById('horaConsulta').value;
            var inicio = new Date('1970-01-01T' + horaInicio + ':00');
            
            // Adiciona +1 hora à hora inicial
            inicio.setHours(inicio.getHours() + 1);
            
            // Formata a hora final no formato HH:MM
            var horaFinal = ('0' + inicio.getHours()).slice(-2) + ':' + ('0' + inicio.getMinutes()).slice(-2);
            
            // Define o valor da hora final no campo de entrada
            document.getElementById('FimConsulta').value = horaFinal;
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