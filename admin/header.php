<?php
require("config.php");
?>  
  <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="dashboard.php" class="logo">
						<img src="assets\images\izi_logo.png" alt="Logo">
					</a>
					<a href="dashboard.php" class="logo logo-small">
						<img src="assets\images\izi_logo.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				

				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>

				<ul class="nav user-menu">

					
					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="31" alt="Administrador"></span>
						</a>
						
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6></h6>
									<p class="text-muted mb-0">Administrador</p>
								</div>
							</div>
							<a class="dropdown-item" href="perfil.php">Perfil</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>


					
				</ul>

				
            </div>
	
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Menu</span>
							</li>
							<li> 
								<a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							
			
							<li class="menu-title"> 
								<span>Todos os usuários</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Todos Usuários </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="adminlista.php"> Admin </a></li>
									<li><a href="usuariolista.php"> Usuários </a></li>
									<li><a href="corretorlista.php"> Funcionarios </a></li>
									<li><a href="construtorlista.php"> Construtoras </a></li>
								</ul>
							</li>

							<li class="menu-title"> 
								<span>Estado & Cidade</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-location"></i> <span>Estado & Cidade</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="estadoadd.php"> Estado </a></li>
									<li><a href="cidadeadd.php"> Cidade </a></li>
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span>Gerenciamento de Imoveis</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span> Imoveis</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="imoveisadd.php"> Adicionar Imoveis</a></li>
									<li><a href="imoveislistar.php"> Listar Imoveis </a></li>
									
								</ul>
							</li>
							
							
							
							
						</ul>
					</div>
                </div>
            </div>

