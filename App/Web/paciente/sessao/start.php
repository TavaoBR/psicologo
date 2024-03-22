<?=$this->layout('themes/index', ['title' => $title]);$temaColor = configTemaColor();?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js" integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?=Assests("assets/css/form$temaColor.css")?>">

<div class="container">
<h2 class="text-bold">Iniciar Sessão</h2>
<div class="text-end">
        <p id="cronometro">Cronômetro</p>
        <p id="tempo" class="btn btn-secondary"></p>
    </div>
    <div class="btn-group">
        <button id="btnIniciar" class="btn btn-primary" onclick="iniciarCronometro()">Iniciar</button>
    </div>
    <div class="btn-group">
        <button id="btnPausar" class="btn btn-warning" style="display: none;" onclick="pausarCronometro()">Pausar</button>
    </div>
    <div class="btn-group">
        <button id="btnContinuar" class="btn btn-success" style="display: none;" onclick="continuarCronometro()">Continuar</button>
    </div>
    <div class="btn-group">
        <button id="btnParar" class="btn btn-danger" style="display: none;" onclick="pararCronometro()">Parar</button>
    </div>
</div>

<hr>
<section >
<div class="container" >

    <div class="row">


    <form  action="<?=routerConfig()?>/pacientes/sessao/iniciar/<?=$id?>" method="POST"> 
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
                                    <h5 class="font-size-16 mb-1">Anotações</h5>
                                    <div class="mb-3">

                                        <input type="hidden" name="inicial" id="horaInicioSessao" value="">
                                        <input type="hidden" name="final" id="horaFinalSessao" value="">
                                        <input type="hidden" name="cronometro" id="valorCronometro" value="">
                                        
                                            <div>
                                                <div class="row">

                                                <div class="col-lg-4">
                                                       <div class="mb-3">
                                                       <label class="form-label" for="billing-address">Inicio da sessão da sessão</label>
                                                       <input type="time" class="form-control" id="horaInicioSessao1">
                                                       </div>
                                                    </div>

                                                    

                                                    <div class="col-lg-4">
                                                       <div class="mb-3">
                                                       <label class="form-label" for="billing-address">Fim da Sessão</label>
                                                       <input type="time" class="form-control" id="horaFinalSessao1" >
                                                       </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-address">Anotação da sessão</label>
                                                            <textarea class="form-control" name="anotacao" id="trumbowyg-demo" required></textarea>
                                                            
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
                      <button type="submit" id="bloquearBotao" onclick="bloquear()" class="btn btn-primary" style="display: none">Cadastrar</button> 
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row-->
        </div>
      </form>
    </div>
    <!-- end row -->
    
</div>
</section>





<script>
let tempoInicial;
let cronometro;

function iniciarCronometro() {
    document.getElementById("btnIniciar").style.display = "none"; // Esconder botão de iniciar
    document.getElementById("btnPausar").style.display = "block"; // Exibir botão de pausar
    document.getElementById("btnParar").style.display = "block"; // Exibir botão de parar
    document.getElementById("cronometro").innerText = "Cronômetro: ";
    tempoInicial = new Date().getTime(); // Capturar o tempo inicial em milissegundos
    //document.getElementById("exibirSessao").style.display = "block";
    document.getElementById("horaInicioSessao").value = new Date().toLocaleTimeString(); // Atribuir a hora de início
    document.getElementById("horaInicioSessao1").value = new Date().toLocaleTimeString(); // Atribuir a hora de início
    cronometro = setInterval(atualizarTempo, 100); // Atualizar o tempo a cada 100 milissegundos
}

function pausarCronometro() {
    clearInterval(cronometro); // Parar o cronômetro
    document.getElementById("btnPausar").style.display = "none"; // Esconder botão de pausar
    document.getElementById("btnContinuar").style.display = "block"; // Exibir botão de continuar
}

function continuarCronometro() {
    document.getElementById("btnContinuar").style.display = "none"; // Esconder botão de continuar
    document.getElementById("btnPausar").style.display = "block"; // Exibir botão de pausar
    tempoInicial = new Date().getTime() - tempoDecorrido; // Atualizar o tempo inicial para continuar do ponto pausado
    cronometro = setInterval(atualizarTempo, 100); // Continuar o cronômetro
}

function pararCronometro() {
    clearInterval(cronometro); // Parar o cronômetro
    document.getElementById("btnIniciar").style.display = "block"; // Exibir botão de iniciar
    document.getElementById("btnPausar").style.display = "none"; // Esconder botão de pausar
    document.getElementById("btnContinuar").style.display = "none"; // Esconder botão de continuar
    document.getElementById("btnParar").style.display = "none"; // Esconder botão de parar
    document.getElementById("bloquearBotao").style.display = "block";
    tempoDecorrido = 0; // Resetar o tempo decorrido
    document.getElementById("horaFinalSessao").value = new Date().toLocaleTimeString(); // Atribuir a hora de fim
    document.getElementById("horaFinalSessao1").value = new Date().toLocaleTimeString(); // Atribuir a hora de fim
}

function atualizarTempo() {
    let tempoAtual = new Date().getTime(); // Tempo atual em milissegundos
    let tempoDecorridoAtualizado = tempoAtual - tempoInicial; // Calcular o tempo decorrido em milissegundos

    let horas = Math.floor(tempoDecorridoAtualizado / 3600000); // Calcular horas
    let minutos = Math.floor((tempoDecorridoAtualizado % 3600000) / 60000); // Calcular minutos
    let segundos = Math.floor((tempoDecorridoAtualizado % 60000) / 1000); // Calcular segundos
    let milissegundos = Math.floor((tempoDecorridoAtualizado % 1000) / 10); // Calcular milissegundos

    // Formatar os valores para garantir que sempre tenham dois dígitos
    let horasFormatadas = horas < 10 ? '0' + horas : horas;
    let minutosFormatados = minutos < 10 ? '0' + minutos : minutos;
    let segundosFormatados = segundos < 10 ? '0' + segundos : segundos;
    let milissegundosFormatados = milissegundos < 10 ? '0' + milissegundos : milissegundos;

    document.getElementById("tempo").innerText = `${horasFormatadas}:${minutosFormatados}:${segundosFormatados}:${milissegundosFormatados}`; // Atualizar exibição do tempo
    document.getElementById("valorCronometro").value = `${horasFormatadas}:${minutosFormatados}:${segundosFormatados}:${milissegundosFormatados}`; // Atualizar exibição do tempo
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

<script>
    $('#trumbowyg-demo').trumbowyg({
    btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['strong', 'em', 'del'],
        ['superscript', 'subscript'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ]
});
</script>

