<?php
require("config.php");
?>
<!DOCTYPE html>
<html lang="pt">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Tabelas</title>
		
	
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		

        <link rel="stylesheet" href="assets/css/style.css">
		
		
    </head>
    <body>
	
	
				<?php include("header.php"); ?>
			
            <div class="page-wrapper">
                <div class="content container-fluid">


					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Imoveis</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Imoveis</li>
								</ul>
							</div>
						</div>
					</div>
				
					
					
					
					
					<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-0 mb-4">Lista imoveis</h4>
										<?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];	
										?>
                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                
                                                    <th>Titulo</th>
                                                    <th>Tipo</th>
                                                    <th>Quartos</th>
                                                    <th>Venda/Locação</th>
                                                   
													<th>Area</th>
                                                    <th>Valor</th>
                                                    <th>Aluguel</th>
													<th>Status</th>
                                                   
                                                    
                                                    <th>Adicionar Data</th>
                                                    <th>Actions</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
												<?php
													
													$query=mysqli_query($con,"select * from imoveis");
													while($row=mysqli_fetch_row($query))
													{
												?>
											
                                                <tr>
                                                    <!-- <td><?php echo $row['0']; ?></td> -->
                                                    <td><?php echo $row['1']; ?></td>
                                                    <td><?php echo $row['3']; ?></td>
                                                    <td><?php echo $row['4']; ?></td>
                                                    <td><?php echo $row['5']; ?></td>
                                                   
                                                    <td><?php echo $row['12']; ?></td>
                                                    <td><?php echo $row['13']; ?></td>
                                                    <td><?php echo $row['14']; ?></td>
													
                                                   
                                                    <td><?php echo $row['24']; ?></td>
													
                                                    
                                                    <td><?php echo $row['29']; ?></td>
													<td><a href="propertyedit.php?id=<?php echo $row['0'];?>"><button class="btn btn-info">Editar</button></a>
                                                    <a href="propertydelete.php?id=<?php echo $row['0'];?>"><button class="btn btn-danger">Deletar</button></a></td>
                                                </tr>
                                               <?php
												} 
												?>
                                            </tbody>
                                        </table>
                                        
                                    </div> <
                                </div> 
                            </div>
                        </div>
                     
					
				</div>			
			</div>
			
        <script src="assets/js/jquery-3.2.1.min.js"></script>
	
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		

        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
