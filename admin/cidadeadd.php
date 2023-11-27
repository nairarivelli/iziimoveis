<?php
include("config.php"); 

$error="";
$msg="";
if(isset($_POST['insert']))
{
	$estado=$_POST['cidade'];
	$cidade=$_POST['cidade'];
	
	if(!empty($estado) && !empty($cidade)){
		$sql="INSERT INTO cidade (cidadeNome,estadoId) values('$cidade','$estado')";
		$result=mysqli_query($con,$sql);
		if($result)
			{
				$msg="<p class='alert alert-success'>Cidade inserida</p>";
						
			}
			else
			{
				$error="<p class='alert alert-warning'>* Cidade não inserida</p>";
			}
	}
	else{
		$error = "<p class='alert alert-warning'>* Preencha todos os campos</p>";
	}
	
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Informações</title>
		

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
	

			<?php include("header.php");?>	
		
            <div class="page-wrapper">
                <div class="content container-fluid">

					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Estado</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Estado</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h1 class="card-title">Adicionar Cidade</h1>
									<?php echo $error;?>
									<?php echo $msg;?>
									<?php 
										if(isset($_GET['msg']))	
										echo $_GET['msg'];	
									?>
								</div>
								<form method="post" id="insert product" enctype="multipart/form-data">
									<div class="card-body">
											<div class="row">
												<div class="col-xl-6">
													<h5 class="card-title">Cidade detalhes</h5>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Nome do Estado</label>
														<div class="col-lg-9" >	
															<select class="form-control" name="estado">
																<option value="">Selecione</option>
																<?php
																		$query1=mysqli_query($con,"select * from estado");
																		while($row1=mysqli_fetch_row($query1))
																			{
																	?>
																<option value="<?php echo $row1['0']; ?>" class="text-captalize"><?php echo $row1['1']; ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Nome da Cidade</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="cidade">
														</div>
													</div>
												</div>
											</div>
											<div class="text-left">
												<input type="submit" class="btn btn-primary"  value="Enviars" name="insert" style="margin-left:200px;">
											</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Lista de cidades</h4>
									
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Cidade</th>
								
													<th>Estado</th>
													<th>Detalhes</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
											<?php
													
												$query=mysqli_query($con,"select cidade.*,estado.estadoNome from cidade,estado where cidade.estadoId=estado.estadoId");
												$cnt=1;
												while($row=mysqli_fetch_array($query))
													{
											?>
                                                <tr>
                                                    
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $row['1']; ?></td>
													<!-- <td><?php echo $row['2']; ?></td> -->
													<td><?php echo $row['sname']; ?></td>
													<td><a href="cityedit.php?id=<?php echo $row['0']; ?>"><button class="btn btn-info">Edit</button></a>
                                                   <a href="citydelete.php?id=<?php echo $row['0']; ?>"><button class="btn btn-danger">Delete</button></a></td>
                                                </tr>
                                                <?php $cnt=$cnt+1; } ?>

                                            </tbody>
                                        </table>
								</div>
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
