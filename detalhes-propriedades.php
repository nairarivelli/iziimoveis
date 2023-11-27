<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>IZImóveis - Detalhes da propriedade</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <!--Arquivos CSS Adicionais -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <link rel="icon" href="assets/images/izi_logo.png">
</head>

<body>


  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <div id="page-wrapper">
    <div class="row">

      <?php include("include/header2.php");?>
    </div>

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

      <div class="single-property section">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/casa1.jpg" alt="Primeiro Slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/casa2.jpg" alt="Segundo Slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/casa3.jpeg" alt="Terceiro Slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>
              <div class="main-content">
                <span class="category">Apartamento</span>
                <h4>24 New Street Miami, OR 24560</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

                <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-table">
                <ul>
                  <li>
                    <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                    <h4>450 m2<br><span>Espaço total</span></h4>
                  </li>
                  <li>
                    <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                    <h4>Contrato<br><span>Contrato pronto</span></h4>
                  </li>
                  <li>
                    <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                    <h4>Pagamento<br><span>Processo de pagamento</span></h4>
                  </li>
                  <li>
                    <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                    <h4>Segurança<br><span>24/7 Segurança</span></h4>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section best-deal">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="section-heading">
                <h6>| Melhor negócio</h6>
                <h2>Encontre o seu melhor negócio agora mesmo!</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="tabs-content">
                <div class="row">
                  <div class="nav-wrapper ">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="apartamento" aria-selected="true">Apartamento</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="casa" aria-selected="false">Casa</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="cobertura" aria-selected="false">Cobertura</button>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="info-table">
                            <ul>
                              <li>Espaço total <span>540 m2</span></li>
                              <li>Número do andar <span>3</span></li>
                              <li>Número de quartos <span>8</span></li>
                              <li>Estacionamento disponível <span>Sim</span></li>
                              <li>Modo de pagamento <span>Banco</span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <img src="assets/images/deal-01.jpg" alt="">
                        </div>
                        <div class="col-lg-3">
                          <h4>Todas as informações sobre a propriedade</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                          <div class="icon-button">
                            <a href="#"><i class="fa fa-calendar"></i> Marque uma visita</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="info-table">
                            <ul>
                              <li>Espaço total <span>250 m2</span></li>
                              <li>Número do andar <span>3</span></li>
                              <li>Número de quartos <span>3</span></li>
                              <li>Estacionamento disponível <span>Sim</span></li>
                              <li>Modo de pagamento <span>Banco</span></li>
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
                            <a href="#"><i class="fa fa-calendar"></i> Marque uma visita</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="info-table">
                            <ul>
                              <li>Espaço total <span>380 m2</span></li>
                              <li>Número do andar <span>3</span></li>
                              <li>Número de quartos <span>5</span></li>
                              <li>Estacionamento disponível <span>Sim</span></li>
                              <li>Modo de pagamento <span>Banco</span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <img src="assets/images/deal-03.jpg" alt="">
                        </div>
                        <div class="col-lg-3">
                          <h4>Mais informações sobre a propriedade</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut Kinfolk tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice, chillwave vexillologistlabore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                          <div class="icon-button">
                            <a href="#"><i class="fa fa-calendar"></i> Marque uma visita</a>
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

      <footer class="footer-no-gap">
        <div class="container">
          <div class="col-lg-12">
            <p>Copyright © 2048 Izimóveis Co., Ltd. All rights reserved.
          </div>
        </div>
      </footer>

      <!-- Scripts -->
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/isotope.min.js"></script>
      <script src="assets/js/owl-carousel.js"></script>
      <script src="assets/js/counter.js"></script>
      <script src="assets/js/custom.js"></script>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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

</body>

</html>