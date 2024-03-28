<?=$this->layout('themes/index', ['title' => $title]);?>

<?php
if($conta > 0):
 
?>

<?php 
 if($dataAtual == $data['data']):
?>

<h2 class="">Paciente já teve uma sessão hoje</h2>

<?php 
 else:
?>

<h2 class="text-bold">Criar Sessão</h2>

<div class="container">

<form action="<?=routerConfig()?>/pacientes/sessao/criar/<?=$data['id']?>" method="POST">
    <button type="submit" class="btn btn-primary">Criar</button>
</form>

</div>
<?=validateSession("CriarSessao")?>
<script>
    function bloquear(){
      var botao = document.getElementById("bloquearBotao");
      botao.disabled = true;
      
      setTimeout(function() {
        botao.form.submit();
      }, 100);
    }
</script>

<?php 
 endif;
?>



<?php 
else:
?>

<?php 
 include_once("App/Web/paciente/notfound/404.php");
?>

<?php 
endif;
?>

