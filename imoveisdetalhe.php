<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("conexao.php");
								
?>
<!DOCTYPE html>
<html lang="pt">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="IZIIMOVEIS">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">


<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/owl.css">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


<title>iZI IMOVEIS</title>
</head>
<body>


<div id="page-wrapper">
    <div class="row"> 

		<?php include("include/header.php");?>
        <div class="page-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <span class="breadcrumb"><a href="#">Inicio</a> / Detalhes da propriedade</span>
              <h3>Detalhes da propriedade</h3>
            </div>
          </div>
        </div>
      </div>



        <div class="banner-full-row page-banner" style="background-image:url('assets/images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Detalhes Imóvel</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Detalhes imóvel</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

		
        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<?php
						$idImovel=$_REQUEST['idImovel']; 
						$query=mysqli_query($con,"SELECT imoveis.*, usuarios.* FROM `imoveis`,`usuarios` WHERE imoveis.idImovel=usuarios.idUsuario and idImovel='$idImovel'");
						while($row=mysqli_fetch_array($query))
						{
					  ?>
				  
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/imoveis/<?php echo $row['18'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/imoveis/<?php echo $row['19'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/imoveis/<?php echo $row['20'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 4-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/imoveis/<?php echo $row['21'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 5-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/imoveis/<?php echo $row['22'];?>" class="ls-bg" alt="" /> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">Para <?php echo $row['5'];?></div>
                                <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['1'];?></h5>
                                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i> &nbsp;<?php echo $row['14'];?></span>
							</div>
                            <div class="col-md-6">
                                <div class="text-success text-left h5 my-2 text-md-right">$<?php echo $row['13'];?></div>
                                <div class="text-left text-md-right">Preco</div>
                            </div>
                        </div>
                        <div class="property-details">
                            <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <ul>
                                    <li><span class="text-secondary"><?php echo $row['12'];?></span> m²</li>
                                    <li><span class="text-secondary"><?php echo $row['6'];?></span> Quartos</li>
                                    <li><span class="text-secondary"><?php echo $row['7'];?></span> Banheiros</li>
                                    <li><span class="text-secondary"><?php echo $row['8'];?></span> Lavanderia</li>
                                    <li><span class="text-secondary"><?php echo $row['10'];?></span> Quintal</li>
                                    <li><span class="text-secondary"><?php echo $row['9'];?></span> Cozinha</li>
                                </ul>
                            </div>
                            <h4 class="text-secondary my-4">Descrição</h4>
                            <p><?php echo $row['2'];?></p>
                            
                            <h5 class="mt-5 mb-4 text-secondary">Imóvel</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td>Comodos :</td>
                                            <td class="text-capitalize"><?php echo $row['4'];?></td>
                                            <td>Tipo de imóvel :</td>
                                            <td class="text-capitalize"><?php echo $row['3'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Floor :</td>
                                            <td class="text-capitalize"><?php echo $row['11'];?></td>
                                            <td>Total de andares  :</td>
                                            <td class="text-capitalize"><?php echo $row['28'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Cidade :</td>
                                            <td class="text-capitalize"><?php echo $row['15'];?></td>
                                            <td>Estado :</td>
                                            <td class="text-capitalize"><?php echo $row['16'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mt-5 mb-4 text-secondary">Acomodações</h5>
                            <div class="row">
								<?php echo $row['17'];?>
								
                            </div>   
                            <h5 class="mt-5 mb-4 text-secondary">Andares</h5>
                            <div class="accordion" id="accordionExample">
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Andares </button>
                                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <img src="admin/imoveis/<?php echo $row['25'];?>" alt="Não está disponivel"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Porão/Soltão</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="admin/imoveis/<?php echo $row['26'];?>" alt="Não está disponivel"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> xx </button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="admin/imoveis/<?php echo $row['27'];?>" alt="Não está disponive"> </div>
                            </div>

                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contatar corretor</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <div class="col-sm-4 col-lg-3"> <img src="admin/usuarios/<?php echo $row['usuarioImg']; ?>" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-success text-capitalize"><?php echo $row[' usuarioNome '];?></h6>
                                            <ul class="mb-3">
                                                <li><?php echo $row['usuarioNumero'];?></li>
                                                <li><?php echo $row['usuarioEmail'];?></li>
                                            </ul>
                                            
                                            <div class="mt-3 text-secondary hover-text-success">
                                                <ul>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fas fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } ?>
					
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Imóveis semelhantes</h4>
                        <ul class="property_list_widget">
							
                            <?php 
                            $query=mysqli_query($con,"SELECT * FROM `imoveis` WHERE relacionado = 1 ORDER BY date DESC LIMIT 3");
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                            <li> <img src="admin/imoveis/<?php echo $row['18'];?>" alt="pimage">
                                <h6 class="text-secondary hover-text-success text-capitalize"><a href="imoveisdetalhe.php?idImovel=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14'];?></span>
                                
                            </li>
                            <?php } ?>

                        </ul>

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Imóveis recentes</h4>
                            <ul class="property_list_widget">
							
								<?php 
								$query=mysqli_query($con,"SELECT * FROM `imoveis` ORDER BY date DESC LIMIT 7");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="admin/imoveis/<?php echo $row['18'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="imoveisdetalhe.php?idImovel=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14'];?></span>
                                    
                                </li>
                                <?php } ?>

                            </ul>
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