    <header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
    <div class="top-header" style="background-color: #FFFFFF;">
    <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact">
                                <ul class="list-text-black-bold d-table">
								<li><i class="fas fa-user text-success mr-1"></i>
								<?php  if(isset($_SESSION['usuarioEmail']))
								{ ?>
								<a href="logout.php">Logout</a>&nbsp;&nbsp;<?php } else { ?>
								<a href="login.php">Login</a>&nbsp;&nbsp;
								
								| </li>
								<li><i class="fas fa-user-plus text-success mr-1"></i><a href="registrarUsuario.php"> SignUp</li><?php } ?>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="assets/images/logo/izi_logo.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="detalhes.php">Sobre</a> </li>
									
										
                                        <li class="nav-item"> <a class="nav-link" href="imoveis.php">Imoveis</a> </li>
                                        
                                        <li class="nav-item"> <a class="nav-link" href="corretores.php">Corretores</a> </li>

										
										<?php  if(isset($_SESSION['usuarioEmail']))
										{ ?>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minha conta</a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="perfil.php">Perfil</a> </li>
												<li class="nav-item"> <a class="nav-link" href="relacionado.php">Seus Imoveis</a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>	
											</ul>
                                        </li>
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Login/SignUp</a> </li>
										<?php } ?>
										
                                    </ul>
                                    
									
									<a class="btn btn-success d-none d-xl-block" style="border-radius:10px; background-color: #663300;" href="enviarimovel.php">Cadastre um imovel</a> 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>