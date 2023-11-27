<?php 
include("conexao.php");
$error="";
$msg="";
if(isset($_REQUEST['reg']))
{
	$usuarioNome=$_REQUEST['usuarioNome'];
	$usuarioEmail=$_REQUEST['usuarioEmail'];
	$usuarioNumero=$_REQUEST['usuarioNumero'];
	$usuarioSenha=$_REQUEST['usuarioSenha'];
	$usuarioTipo=$_REQUEST['usuarioTipo'];
	
	$uimage=$_FILES['uimage']['name'];
	$temp_name1 = $_FILES['uimage']['tmp_name'];
	$usuarioSenha= sha1($usuarioSenha);
	
	$query = "SELECT * FROM usuarios where usuarioEmail='$usuarioEmail'";
	$res=mysqli_query($con, $query);
	$num=mysqli_num_rows($res);
	
	if($num == 1)
	{
		$error = "<p class='alert alert-warning'>Email já existe</p> ";
	}
	else
	{
		
		if(!empty($usuarioNome) && !empty($usuarioEmail) && !empty($usuarioNumero) && !empty($usuarioSenha) && !empty($usuarioImg))
		{
			
			$sql="INSERT INTO usuarios (usuarioNome,usuarioEmail,usuarioNumero,usuarioSenha,usuarioTipo,uimage) VALUES ('$usuarioName','$usuarioEmail','$usuarioNumero','$usuarioSenha','$usuarioTipo','$uimage')";
			$result=mysqli_query($con, $sql);
			move_uploaded_file($temp_name1,"admin/usuario/$uimage");
			   if($result){
				   $msg = "<p class='alert alert-success'>Registro Completo</p> ";
			   }
			   else{
				   $error = "<p class='alert alert-warning'>Erro</p> ";
			   }
		}else{
			$error = "<p class='alert alert-warning'>Preencha todos os cantos</p>";
		}
	}
	
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">


<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">


<title>IZIMOVEIS</title>
</head>
<body>


<div id="page-wrapper">
		<?php include("include/header.php");?>
		 
		 
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Registrar</h1>
								<p class="account-subtitle">Acesse o Site</p>
								<?php echo $error; ?><?php echo $msg; ?>


								<form method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text"  name="usuarioNome" class="form-control" placeholder="Nome*">
									</div>
									<div class="form-group">
										<input type="email"  name="usuarioEmail" class="form-control" placeholder=" Email">
									</div>
									<div class="form-group">
										<input type="text"  name="usuarioNumero" class="form-control" placeholder="Telefone" maxlength="10">
									</div>
									<div class="form-group">
										<input type="password" name="usuarioSenha"  class="form-control" placeholder="Senha">
									</div>

									 <div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="usuarioTipo" value="usuario" checked>Usuário
									  </label>
									</div>

									<div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="usuarioTipo" value="corretor">Corretor
									  </label>
									</div>
									<div class="form-check-inline disabled">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="usuarioTipo" value="construtora">Construtora
									  </label>
									</div> 
									
									<div class="form-group">
										<label class="col-form-label"><b> Imagem</b></label>
										<input class="form-control" name="uimage" type="file">
									</div>
									
									<button class="btn btn-success" name="reg" value="Register" type="submit">Registrar</button>
									
								</form>
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">ou</span>
								</div>
								
								
								<div class="text-center dont-have">Já tem uma conta? <a href="login.php">Login</a></div>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="js/jquery.min.js"></script> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>