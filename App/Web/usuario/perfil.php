<?=$this->layout('themes/index', ['title' => $title]);?>


<?php 
if($dados['tema'] == 'Dark'){
  $style = "background-color: #1A1919; color:#eee;";
  $text = "text-white";
}else{
  $text = "text-primary";
}
?>

<section>
   

  <div class="container">

  <h2 class=""> Perfil </h2>

    <div class="row">
      <div class="col-lg-4" >
        <div class="card mb-4" style="<?=$style?>">
          <div class="card-body text-center">
            <img src="<?=Assests("assets/img/perfil/{$dados['avatar']}")?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?=$dados['usuario']?></h5>
            <p class=" mb-1"><?=$dados['funcao']?></p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0" style="<?=$style?>">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3" style="<?=$style?>">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="<?=$style?>">
              <i class="fa-solid fa-palette text-warning"></i>
                <p class="mb-0"><select id="tema" class="form-control ">
                   <option value="">Selecione um tema</option>
                   <option value="White">Branco</option>
                   <option value="Blue">Azul</option>
                   <option value="Dark">Dark</option>
                </select></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="<?=$style?>">
                <i class="fab fa-github fa-lg <?=$text?>" ></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="<?=$style?>">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="<?=$style?>">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="<?=$style?>">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4" style="<?=$style?>">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Celular 1</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Celular 2</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Token de segurança</p>
              </div>
              <div class="col-sm-9">
                <p class=" mb-0"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6" >
            <div class="card mb-4 mb-md-0" style="<?=$style?>">
              <div class="card-body">
                <p class="mb-4"><span class="<?=$text?> font-italic me-1">Soft skills</span>
                </p>
                <p class="mb-1" style="font-size: .77rem;">Comunicação</p>
                <div class="progress rounded" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Relacionamento interpessoal</p>
                <div class="progress rounded" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100">72%</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Organização</p>
                <div class="progress rounded" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100">89%</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Planejamento</p>
                <div class="progress rounded" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100">55%</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Trabalho em equipe</p>
                <div class="progress rounded mb-2" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100">66%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0" style="<?=$style?>">
              <div class="card-body">
                <p class="mb-4"><span class="<?=$text?> font-italic me-1">Hard Skills</span>
                </p>
                <p class="mb-1" style="font-size: .77rem;">PHP</p>
                <div class="progress rounded" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">JavaScript</p>
                <div class="progress rounded" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Nodejs/Nextjs/TypeScript</p>
                <div class="progress rounded" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Html</p>
                <div class="progress rounded" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Css</p>
                <div class="progress rounded mb-2" style="height: 15px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?=validateSession("TemaMessage")?>

<script>
const selectTema = document.getElementById('tema');

selectTema.addEventListener('change', () => {
  const temaSelecionado = selectTema.value;

  // Mostra um Sweet Alert antes de enviar o tema
  Swal.fire({
    title: 'Aguarde',
    text: `Estamos configurando o tema ${temaSelecionado}`,
    allowOutsideClick: false,
    showCancelButton: false,
    showConfirmButton: false,
    //timer: 30000,
    didOpen: () => {
      Swal.showLoading();
      // Envia o valor do tema para o arquivo PHP via POST
      const xhr = new XMLHttpRequest();
      xhr.open('POST', "<?=routerConfig()?>/usuario/temas/<?=$dados['id']?>");
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send(`tema=${temaSelecionado}`);

      // Fecha o Sweet Alert após a requisição ser concluída
      setTimeout(() => {
      Swal.close();
      location.reload();
    }, 1000);
    },
  });
});
</script>