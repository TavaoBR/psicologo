<?=$this->layout('themes/index', ['title' => $title]);?>

<style>
    .mail-seccess {
    text-align: center;
	background: #fff;
	border-top: 1px solid #eee;
}
.mail-seccess .success-inner {
	display: inline-block;
}
.mail-seccess .success-inner h1 {
	font-size: 100px;
	text-shadow: 3px 5px 2px #3333;
	color: #006DFE;
	font-weight: 700;
}
.mail-seccess .success-inner h1 span {
	display: block;
	font-size: 25px;
	color: #333;
	font-weight: 600;
	text-shadow: none;
	margin-top: 20px;
}
.mail-seccess .success-inner p {
	padding: 20px 15px;
}
.mail-seccess .success-inner .btn{
	color:#fff;
}
</style>

<section class="mail-seccess section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12">
				<!-- Error Inner -->
				<div class="success-inner">
					<h1><i class="fa-solid fa-circle-check text-success"></i></i><h2>Sucesso!</h2></h1>
					<h3>Ocorreu com exito a sua sessão com o paciente</h3>
					<a href="#" class="btn btn-primary btn-lg">Pacientes</a>
				</div>
				<!--/ End Error Inner -->
			</div>
		</div>
	</div>
</section>