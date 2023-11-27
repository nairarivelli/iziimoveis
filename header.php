<?php
session_start();
require("conexao.php");
////code
 
if(!isset($_SESSION['adminUsuario']))
{
	header("location:index.php");
}
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
				

				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					
					<!-- Ucapitalize;"><?php echo $_SESSION['adminUsuario'];?></h4> -->
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
									<h6><?php echo $_SESSION['adminUsuario'];?></h6>
									<p class="text-muted mb-0">Administrador</p>
								</div>
							</div>
							<a class="dropdown-item" href="perfil.php">Perfil</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>

				</ul>
				
            </div>
			
			
			
						<!-- Sidebar -->
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
									<li><a href="usuarioCorretor.php"> Funcionarios </a></li>
									<li><a href="usuarioConstrutor.php"> Builder </a></li>
								</ul>
							</li>

							<li class="menu-title"> 
								<span>Estado & Cidade</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-location"></i> <span>Estado & Cidade</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="stateadd.php"> Estado </a></li>
									<li><a href="cityadd.php"> Cidade </a></li>
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span>Gerenciamento de Propriedades</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span> Propriedades</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="propertyadd.php"> Adicionar Propriedades</a></li>
									<li><a href="propertyview.php"> Listar Propriedades </a></li>
									
								</ul>
							</li>
							
							
							
							<li class="menu-title"> 
								<span>Query</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-comment"></i> <span> Contato,Feedback </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="contactview.php"> Contato </a></li>
									<li><a href="feedbackview.php"> Feedback </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Sobre</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-browser"></i> <span> Sobre Pagina </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="addDetalhes.php"> Adicionar conteúdo </a></li>
									<li><a href="listarDetalhes.php"> Ver conteúdo </a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
