<?php 
session_start();
validateUser();

$temaColor = configTemaColor();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=Assests("workspace/assets/image/logo/AZULPNG.png")?>" rel="icon">
    <link href="<?=Assests("workspace/assets/image/logo/AZULPNG.png")?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?=Libs("assets/vendor/bootstrap/css/bootstrap.min.css")?> " rel="stylesheet">
    <link href="<?=Libs("assets/vendor/bootstrap-icons/bootstrap-icons.css")?>" rel="stylesheet">
    <link href="<?=Libs("assets/vendor/quill/quill.snow.css")?>" rel="stylesheet">
    <link href="<?=Libs("assets/vendor/quill/quill.bubble.css")?>" rel="stylesheet">
    <link href="<?=Libs("assets/vendor/simple-datatables/style.css")?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=Assests("assets/css/style$temaColor.css")?>">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
   <!-- Template Main CSS File -->
    <title><?=$this->e($title)?></title>


</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?=routerConfig()?>/pacientes" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span class="d-none d-lg-block">Projeto Psicologo</span>
      </a>
      <i class='bx bx-transfer toggle-sidebar-btn'></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="<?=routerConfig()?>/pacientes/pesquisar">
        <input type="text" name="cpf" placeholder="CPF" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bx bx-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bx bx-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <!--<li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bx bx-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a>End Notification Icon 

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bx bx-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bx bx-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bx bx-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bx bx-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul>

        </li> -->

       <!-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
             <i class='bx bx-chat' ></i>
            <span class="badge bg-success badge-number">3</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul>

        </li> -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?=Assests("assets/img/perfil/").getSession("avatar")?>" alt="Profile" class="rounded-circle">
          </a><!-- End Profile Iamge Icon -->

          <!--<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">


            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bx bx-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bx bx-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bx bx-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bx bx-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>--><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
<!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#edit-user" data-bs-toggle="collapse" href="#">
        <i class='bx bxs-cog' ></i><span>Temas</span><i class="bx bx-chevron-down ms-auto"></i>
        </a>
        <ul id="edit-user" class="nav-content collapse " data-bs-parent="#sidebar-nav">
           <li>
              <select id="tema" class="form-control ">
                   <option value="">Selecione um tema</option>
                   <option value="White">Branco</option>
                   <option value="Blue">Azul</option>
                   <option value="Dark">Dark</option>
                </select>
           </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=routerConfig()?>/pacientes/cadastrar">
        <i class='bx bxs-folder-plus'></i>
          <span>Cadastrar Paciente</span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=routerConfig()?>/pacientes">
        <i class='bx bx-clipboard' ></i>
          <span>Pacientes</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=routerConfig()?>/agenda">
        <i class='bx bxs-calendar-star'></i>
          <span>Agenda</span>
        </a>
      </li>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=routerConfig()?>/sair">
        <i class='bx bx-exit'></i>
          <span>Sair</span>
        </a>
      </li>
      </li>

      

<!-- End Dashboard Nav -->



    </ul>

  </aside><!-- End Sidebar-->


  <main id="main" class="main">
    <?=$this->section('content')?>
  </main>


  <?php 
   validateSession("Pesquisar");
  ?>

    <!-- Vendor JS Files -->
  <script src="<?=Libs("assets/vendor/apexcharts/apexcharts.min.js")?>"></script>
  <script src="<?=Libs("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
  <script src="<?=Libs("assets/vendor/chart.js/chart.umd.js")?>"></script>
  <script src="<?=Libs("assets/vendor/echarts/echarts.min.js")?>"></script>
  <script src="<?=Libs("assets/vendor/quill/quill.min.js")?>"></script>
  <script src="<?=Libs("assets/vendor/simple-datatables/simple-datatables.js")?>"></script>
  <script src="<?=Libs("assets/vendor/tinymce/tinymce.min.js")?>"></script>
  <script src="<?=Libs("assets/vendor/php-email-form/validate.js")?>"></script>
  <script src="<?=Libs("assets/js/index.global.min.js");?>"></script>
  <script src="<?=Libs("assets/js/bootstrap5/index.global.min.js");?>"></script>
    <script src="<?=Libs("assets/js/core/locales-all.global.min.js");?>"></script>
  <!-- Template Main JS File -->
  <script src="<?=Assests("assets/js/main.js")?>"></script>
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
      xhr.open('POST', "<?=routerConfig()?>/usuario/temas/<?=getSession("id")?>");
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
</body>
</html>