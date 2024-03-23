<?php 

function LinkCdn(){
    $link = "http://localhost/psicologo/Public/";
    return $link;
 }
 
 
 function Libs(string $path){
   echo LinkCdn()."{$path}";
 }
 
 function Assests(string $path){
     echo LinkCdn()."{$path}";
 }

 function routerConfig()
{
    $rota = "http://localhost/psicologo";
    return $rota;
}

function redirect(string $to){
    return header("Location: {$to}");
}

function redirectBack(){
    $paginaAnterior = $_SERVER['HTTP_REFERER'];
    return header("Location: {$paginaAnterior}"); 
}


function messageSuccess(string $message, string $id = null){
    $alerta = "<p class='alert alert-success' id='{$id}'>{$message}</p>";
    return $alerta;
}

function messageError(string $message, string $id = null){
   $alerta = "<p class='alert alert-danger' id='{$id}'>{$message}</p>";
   return $alerta;
}

function messageWarning(string $message){
    $alerta = "
     <div class='alert alert-warning alert-dismissible fade show' role='alert'>
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
     {$message}
     </div>

   ";
    return $alerta;
}


function sweetAlertSuccess(string $message){
    $sweet = "
    <script>

    function alert(){
        Swal.fire({
            icon: 'success',
            title: 'Sucesso',
            text: '$message',
          });
    }

    alert();
    
    </script>
";

return $sweet;
}

function sweetAlertWarning(string $message, string $title = null){
   
    if($title == "" OR $title == null){
       $title = "Não está esquecendo algo";
    }

    $sweet = "
    <script>

    function alert(){
        Swal.fire({
            icon: 'info',
            title: '$title',
            text: '$message',
          });
    }

    alert()

   
    </script>
";

return $sweet;
}

function sweetAlertError(string $message){
  $sweet = "
      <script>
      function alert(){
        Swal.fire({
            icon: 'error',
            title: 'Ocorreu um erro',
            text: '$message',
          });
      }

      alert()
        
     
      </script>
  ";
  
  return $sweet;
}


function dataAtualFront(){
    $data = new \Src\Services\Datas;
    echo $data->dataAtual();
}
