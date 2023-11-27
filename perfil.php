<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("conexao.php");
if(!isset($_SESSION['usuarioEmail']))
{
	header("location:login.php");
}

$error='';
$msg='';
if(isset($_POST['enviar']))
{
	$usuarioNome=$_POST['usuarioNome'];
	$usuarioNumero=$_POST['usuarioNumero'];

	$content=$_POST['content'];
	
	$idUsuario=$_SESSION['idUsuario'];
	
	if(!empty($usuarioNome) && !empty($usuarioNumero) && !empty($content))
	{
		
		$sql="INSERT INTO feedback (idUsuario,fdescricao,status) VALUES ('$idUsuario','$content','0')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Feedback enviado</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Erro de envio</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Preencha todos os campos</p>";
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

<title>Izi Imoveis</title>
</head>
<body>


<div id="page-wrapper">
    <div class="row"> 

		<?php include("include/header.php");?>
     

        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Perfil</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Perfil</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Perfil</h2>
                        </div>
					</div>
                <div class="dashboard-personal-info p-5 bg-white">
                    <form action="#" method="post">
                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Feedback</h5>
						<?php echo $msg; ?><?php echo $error; ?>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="idUsuario">Nome Completo</label>
                                    <input type="text" name="usuarioNome" class="form-control" placeholder="Nome">
                                </div>                
                                
                                <div class="form-group">
                                    <label for="usuarioNumero">Número</label>
                                    <input type="number" name="usuarioNumero"  class="form-control" placeholder="(xx)XXXXX-XXXX" maxlength="10">
                                </div>

                                <div class="form-group">
                                    <label for="about-me">Feedback</label>
                                    <textarea class="form-control" name="content" rows="7" placeholder="Escreva seu feedback"></textarea>
                                </div>
                                <input type="submit" class="btn btn-info mb-4" name="enviar" value="Enviar Feedback">
                            </div>
							</form>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5 col-md-12">
								<?php 
                            
									$idUsuario=$_SESSION['idUsuario'];
									$query=mysqli_query($con,"SELECT * FROM `usuarios` WHERE idUsuario='$idUsuario'");
									while($row=mysqli_fetch_array($query))
									{
								?>
                                <div class="user-info mt-md-50"> <img src="admin/usuario/<?php echo $row['6'];?>" alt="userimage">
                                    <div class="mb-4 mt-3">
                                        
                                    </div>
									
                                    <div class="font-18">
                                        <div class="mb-1 text-capitalize"><b>Name:</b> <?php echo $row['1'];?></div>
                                        <div class="mb-1"><b>Email:</b> <?php echo $row['2'];?></div>
                                        <div class="mb-1"><b>Contato:</b> <?php echo $row['3'];?></div>
										<div class="mb-1 text-capitalize"><b>Papel:</b> <?php echo $row['5'];?></div>
                                    </div>
									<?php } ?>
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