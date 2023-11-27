<!--php de inicio e armazenamento de sessão--->
<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("conexao.php");
								
?>
<html lang="pt-br">

<!--head especificações html-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!---links de fontes usadas--->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!--Links de css e assets-->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<title>IZIMOVEIS</title>
</head>
<body>
<div id="page-wrapper">
    <div class="row"> 
    <?php include("include/header.php");?>


    <div class= slider-banner1 position-relative" style="background-image: url('assets/images/banner-01.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mb-4"><span class="text-white">CORRA!</span><br><span class="text-white">
                            Tenha o seu lar com cara de lar!</span></br></h1>
                            <form method="post" action="imovelGrid.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
                                                <option value="">Tipo de imovel</option>
												<option value="apartment">Apartamento</option>
												<option value="flat">Flat</option>
												<option value="building">Planta</option>
												<option value="house">Casa</option>
												<option value="villa">Kitnet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype">
                                                <option value="">Tpo de contrato</option>
												<option value="rent">Aluguel</option>
												<option value="sale">Venda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="Cidade" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btbusca">Busca</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="featured section">
                        <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets\images\featured.jpg" alt="">
            <a href="detalhes-propriedades.html"><img src="assets\images\featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Apresentamos</h6>
            <h2>Melhor Apartamento &amp; Vista para o mar</h2>
          </div>

        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets\images\info-icon-01.png" alt="" style="max-width: 52px;">
                <h6>250 m2<br><span>Espaço total</span></h6>
              </li>
              <li>
                <img src="assets\images\info-icon-02.png" alt="" style="max-width: 52px;">
                <h6>Contrato<br><span>Contrato pronto</span></h6>
              </li>
              <li>
                <img src="assets\images\info-icon-03.png" alt="" style="max-width: 52px;">
                <h6>Pagamento<br><span>Modo de pagamento</span></h6>
              </li>
              <li>
                <img src="assets\images/info-icon-04.png" alt="" style="max-width: 52px;">
                <h6>Segurança<br><span>24 horas</span></h6>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary">Imovéis Recentes</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php $query=mysqli_query($con,"SELECT imoveis.*, usuarios.usuarioNome,usuarios.usuarioTipo,usuarios.usuarioImg FROM `imoveis`,`usuarios` WHERE imoveis.idImovel=usuarios.idUsuario ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>
                   <div class="col-md-6 col-lg-4"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="admin/imoveis/<?php echo $row['18'];?>" alt="imagem1">
                                                <div class="featured bg-success text-white">Novo</div>
                                                <div class="sale bg-success text-white text-capitalize">Por <?php echo $row['5'];?></div>
                                                <div class="price text-primary"><b>$<?php echo $row['13'];?> </b><span class="text-white"><?php echo $row['12'];?>m²</span></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-3">
                                                    <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="imoveisdetalhe.php?idImovel=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                                    <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> <?php echo $row['14'];?></span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span><?php echo $row['12'];?></span> m²</li>
                                                        <li><span><?php echo $row['6'];?></span> Quartos</li>
                                                        <li><span><?php echo $row['7'];?></span> Banheiros</li>
                                                        <li><span><?php echo $row['9'];?></span> Cozinha</li>
                                                        <li><span><?php echo $row['8'];?></span> Lavanderia</li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="p-4 d-inline-block w-100">
                                                    <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>Por : <?php echo $row['usuarioNome'];?></div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> <?php echo date('d-m-Y', strtotime($row['date']));?></div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php } ?>

                                </div>
                            </div>
                            <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Melhor negocio</h6>
            <h2>Encontre o seu melhor negócio agora mesmo!</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Apartamento</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Moderna</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Clássica</button>
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Espaço total<span>185 m2</span></li>
                          <li>Número do andar <span>26°</span></li>
                          <li>Número de quartos <span>4</span></li>
                          <li>Garagem disponível <span>Sim</span></li>
                          <li>Modo de pagamento <span>Banco</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-01.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Informações extras sobre a propriedade</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.
                        <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.
                      </p>
                      <div class="icon-button">
                        <a href="detalhes-propriedades.html"><i class="fa fa-calendar"></i> Marque uma visita</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Espaço total<span>185 m2</span></li>
                          <li>Número do andar <span>26°</span></li>
                          <li>Número de quartos <span>4</span></li>
                          <li>Garagem disponível <span>Sim</span></li>
                          <li>Modo de Pagamento<span>Banco</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-02.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Informações detalhadas sobre a propriedade</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fa fa-calendar"></i> Marque uma visita</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Espaço total<span>185 m2</span></li>
                          <li>Número do andar <span>26°</span></li>
                          <li>Número de quartos <span>4</span></li>
                          <li>Garagem disponível <span>Sim</span></li>
                          <li>Modo de pagamento <span>Banco</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/deal-03.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Informações extras sobre a propriedade</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="detalhes-propriedades.php"><i class="fa fa-calendar"></i> Marque uma visita</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="full-row">
      
  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Propriedades</h6>
            <h2>Oferecemos um lar com cara de lar</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="detalhes-propriedades.php"><img src="assets/images/property-01.jpg" alt=""></a>
            <span class="category">Luxo</span>
            <h6>R$2.264.000</h6>
            <h4><a href="detalhes-propriedades.php">18 New Street Miami, OR 97219</a></h4>
            <ul>
              <li>Quartos: <span>8</span></li>
              <li>Banheiros: <span>8</span></li>
              <li>Area: <span>545m2</span></li>
              <li>Andar: <span>3</span></li>
              <li>Garagem: <span>6 vagas</span></li>
            </ul>
            <div class="main-button">
              <a href="detalhes-propriedades.php">Marque uma visita</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="detalhes-propriedades.php"><img src="assets/images/property-02.jpg" alt=""></a>
            <span class="category">Luxo</span>
            <h6>R$1.180.000</h6>
            <h4><a href="detalhes-propriedades.php">54 Mid Street Florida, OR 27001</a></h4>
            <ul>
              <li>Quartos: <span>6</span></li>
              <li>Banheiros: <span>5</span></li>
              <li>Area: <span>450m2</span></li>
              <li>Andar: <span>3</span></li>
              <li>Garagem: <span>8 vagas</span></li>
            </ul>
            <div class="main-button">
              <a href="detalhes-propriedades.php">Marque uma visita</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="detalhes-propriedades.php"><img src="assets/images/property-03.jpg" alt=""></a>
            <span class="category">Luxo</span>
            <h6>R$1.460.000</h6>
            <h4><a href="detalhes-propriedades.php">26 Old Street Miami, OR 38540</a></h4>
            <ul>
              <li>Quartos: <span>5</span></li>
              <li>Banheiros: <span>4</span></li>
              <li>Area: <span>225m2</span></li>
              <li>Andar: <span>3</span></li>
              <li>Garagem: <span>10 vagas</span></li>
            </ul>
            <div class="main-button">
              <a href="detalhes-propriedades.php">Marque uma visita</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="detalhes-propriedades.php"><img src="assets/images/property-04.jpg" alt=""></a>
            <span class="category">Apartamento</span>
            <h6>R$584.500</h6>
            <h4><a href="detalhes-propriedades.php">12 New Street Miami, OR 12650</a></h4>
            <ul>
              <li>Quartos: <span>4</span></li>
              <li>Banheiros: <span>3</span></li>
              <li>Area: <span>125m2</span></li>
              <li>Andar: <span>25°</span></li>
              <li>Garagem: <span>2 carros</span></li>
            </ul>
            <div class="main-button">
              <a href="detalhes-propriedades.php">Marque uma visita</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="detalhes-propriedades.php"><img src="assets/images/property-05.jpg" alt=""></a>
            <span class="category">Cobertura</span>
            <h6>R$925.600</h6>
            <h4><a href="detalhes-propriedades.php">34 Beach Street Miami, OR 42680</a></h4>
            <ul>
              <li>Quartos: <span>4</span></li>
              <li>Banheiros: <span>4</span></li>
              <li>Area: <span>180m2</span></li>
              <li>Andar: <span>38°</span></li>
              <li>Garagem: <span>2 carros</span></li>
            </ul>
            <div class="main-button">
              <a href="detalhes-propriedades.php">Marque uma visita</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="detalhes-propriedades.php"><img src="assets/images/property-06.jpg" alt=""></a>
            <span class="category">Moderno</span>
            <h6>R$450.000</h6>
            <h4><a href="detalhes-propriedades.php">22 New Street Portland, OR 16540</a></h4>
            <ul>
              <li>Quartos: <span>3</span></li>
              <li>Banheiros: <span>2</span></li>
              <li>Area: <span>165m2</span></li>
              <li>Andar: <span>26°</span></li>
              <li>Garagem: <span>3 carros</span></li>
            </ul>
            <div class="main-button">
              <a href="detalhes-propriedades.php">Marque uma visita</a>
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
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>


  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
