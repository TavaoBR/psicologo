<?=$this->layout('themes/index', ['title' => $title]);
$temaColor = configTemaColor();
?>


<link rel="stylesheet" href="<?=Assests("assets/css/form$temaColor.css")?>">

<section>
<div class="container">

<h2 class="text-bold">Cadastro Paciente</h2>

    <div class="row">

    <form method="post" action="<?=routerConfig()?>/pacientes/cadastrar">
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
                                    <h5 class="font-size-16 mb-1">Pessoa</h5>
                                    <div class="mb-3">
                                        
                                            <div>
                                                
                                                <div class="row">

                                                <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label elemento" for="billing-email-address">Cpf</label>
                                                            <input type="text" name="cpf" id="cpf" class="form-control" value="<?=validateSession("cpf")?>">
                                                        </div>
                                                </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-name">Nome Completo</label>
                                                            <input type="text" class="form-control" id="billing-name" name="nome" value="<?=validateSession("nome")?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-phone">Data Nascimento</label>
                                                            <input type="date" class="form-control" id="dataNascimento" name="dataNasc" value="<?=validateSession("data")?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-phone">Idade</label>
                                                            <input type="number" class="form-control" id="idade" value="<?=validateSession("idade")?>" name="idade">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-email-address">E-mail</label>
                                                            <input type="email" class="form-control" name="email" value="<?=validateSession("email")?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-email-address">Celular</label>
                                                            <input type="text" class="form-control" id="celular" placeholder="7999191-7634" name="celular" value="<?=validateSession("celular")?>">
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="checkout-item">
                            <div class="avatar checkout-icon p-1">
                                <div class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bxs-truck text-white font-size-20"></i>
                                </div>
                            </div>
                            <div class="feed-item-list">
                                <div>
                                    <h5 class="font-size-16 mb-1">Endereço</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                                
                                                    <div class="col-lg-4">
                                                        <div class="mb-4 mb-lg-0">
                                                            <label class="form-label">Cep</label>
                                                            <input type="text" class="form-control" id="cep" name="cep" value="<?=validateSession("cep")?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-4 mb-lg-0">
                                                            <label class="form-label" for="billing-city">Estado</label>
                                                            <input type="text" class="form-control" id="uf" name="uf" value="<?=validateSession("uf")?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-0">
                                                            <label class="form-label" for="zip-code">Cidade</label>
                                                            <input type="text" class="form-control" id="cidade" name="cidade" value="<?=validateSession("cidade")?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-0">
                                                            <label class="form-label" for="zip-code">Bairro</label>
                                                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?=validateSession("bairro")?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-8">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">Endereço</label>
                                                        <textarea class="form-control" id="endereco" rows="1" name="endereco"><?=validateSession("endereco")?></textarea>
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

<?=validateSession("CadastroPaciente")?>

<script>
            $('#cpf').mask("999.999.999-99");
            $('#cep').mask("99999-999");
            $('#celular').mask("(99) 9 9999-9999");

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





