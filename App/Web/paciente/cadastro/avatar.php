<?=$this->layout('themes/index', ['title' => $title]);?>


<h2>Cadastrar uma foto do paciente</h2>

<div class="container">

<div class="row text-center align-items-center justify-content-center" style="height: 100vh;">
    <section class="bg-dark">
        <div class="container-fluid">
            <div class="row text-center align-items-center justify-content-center" style="height: 100vh;">
                <div class="col-sm-12 col-md-6 mx-auto">
                    <h1 class="text-white mb-5">
                         Tire uma foto para incluir avatar do paciente
                    </h1>
                    <button class="btn btn-success text-white" id="accesscamera" data-toggle="modal" data-target="#photoModal">
                        Abrir Camera
                    </button>
                        
                </div>
            </div>
        </div>
		
    </section>

    <!--Modal-->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tirar foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div id="my_camera" class="d-block mx-auto rounded overflow-hidden"></div>
                    </div>
                    <div id="results" class="d-none"></div>
                    <form method="post" id="photoForm">
                        <input type="hidden" id="photoStore" name="photoStore" value="">
                    </form>

					<div class="card" style="width: 18rem;">
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item"><i class="fa-solid fa-camera text-primary"></i>  = Tirar foto</li>
									  <li class="list-group-item"><i class="fa-solid fa-camera-rotate text-danger"></i>  = Tirar outra foto</li>
									  <li class="list-group-item"><i class="fa-solid fa-upload text-success"></i>  = Salvar Foto</li>
                                    </ul>
                                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto text-white" id="takephoto"><i class="fa-solid fa-camera"></i></button>
                    <button type="button" class="btn btn-danger mx-auto text-white d-none" id="retakephoto"><i class="fa-solid fa-camera-rotate"></i></button>
                    <button type="submit" class="btn btn-success mx-auto text-white d-none" id="uploadphoto" form="photoForm"><i class="fa-solid fa-upload"></i></button>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js" integrity="sha512-dQIiHSl2hr3NWKKLycPndtpbh5iaHLo6MwrXm7F0FM5e+kL2U16oE9uIwPHUl6fQBeCthiEuV/rzP3MiAB8Vfw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-webcam/1.0.0/jquery.webcam.min.js" integrity="sha512-bTfNSUABHISn7mcOc9mM5xDipX1v7qcfilknueD19cxJ0gTO2/Y2iIByraL01gzsHarb5jyzbgKplvYPAXhnmg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
    Webcam.set({
        width: 450,
        height: 350,
        image_format: 'jpeg',
        jpeg_quality: 100,
		
    });

    $('#accesscamera').on('click', function() {
        Webcam.reset();
        Webcam.on('error', function() {
            $('#photoModal').modal('hide');
            swal({
                title: 'Warning',
                text: 'Please give permission to access your webcam',
                icon: 'warning'
            });
        });
        Webcam.attach('#my_camera');
    });

    $('#takephoto').on('click', take_snapshot);

    $('#retakephoto').on('click', function() {
        $('#my_camera').addClass('d-block');
        $('#my_camera').removeClass('d-none');

        $('#results').addClass('d-none');

        $('#takephoto').addClass('d-block');
        $('#takephoto').removeClass('d-none');

        $('#retakephoto').addClass('d-none');
        $('#retakephoto').removeClass('d-block');

        $('#uploadphoto').addClass('d-none');
        $('#uploadphoto').removeClass('d-block');
    });

    $('#photoForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?=routerConfig()?>/pacientes/cadastrar/tirar/foto/avatar/<?=$id?>",
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data) {
                if(data == 'success') {
                    Webcam.reset();

                    $('#my_camera').addClass('d-block');
                    $('#my_camera').removeClass('d-none');

                    $('#results').addClass('d-none');

                    $('#takephoto').addClass('d-block');
                    $('#takephoto').removeClass('d-none');

                    $('#retakephoto').addClass('d-none');
                    $('#retakephoto').removeClass('d-block');

                    $('#uploadphoto').addClass('d-none');
                    $('#uploadphoto').removeClass('d-block');

                    $('#photoModal').modal('hide');

                    swal({
                        title: 'Sucesso',
                        text: 'Seu registro foi completado',
                        icon: 'success',
                        buttons: false,
                        closeOnClickOutside: false,
                        closeOnEsc: false,
                        timer: 2000
                    })

					alert(data);
                    ocation.href= "<?=routerConfig()?>/pacientes/cadastrar/responsaveis/<?=$id?>";
                }
                else {
                    swal({
                        title: 'Erro',
                        text: 'Aconteceu algo inesperado',
                        icon: 'error'
                    })
                }
            }
        })
    })
})

function take_snapshot()
{
    //take snapshot and get image data
    Webcam.snap(function(data_uri) {
        //display result image
        $('#results').html('<img src="' + data_uri + '" class="d-block mx-auto rounded"/>');

        var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
        $('#photoStore').val(raw_image_data);
    });

    $('#my_camera').removeClass('d-block');
    $('#my_camera').addClass('d-none');

    $('#results').removeClass('d-none');

    $('#takephoto').removeClass('d-block');
    $('#takephoto').addClass('d-none');

    $('#retakephoto').removeClass('d-none');
    $('#retakephoto').addClass('d-block');

    $('#uploadphoto').removeClass('d-none');
    $('#uploadphoto').addClass('d-block');
}
</script>