<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("conexao.php");
if(!isset($_SESSION['usuarioEmail']))
{
	header("location:login.php");
}

$msg="";
if(isset($_POST['add']))
{
	$idImovel=$_REQUEST['idImovel'];
	
	$imovelTitulo=$_POST['imovelTitulo'];
	$imovelConteudo=$_POST['imovelConteudo'];
	$imovelTipo=$_POST['imovelTipo'];
	$comodos=$_POST['comodos'];
	$quartos=$_POST['quartos'];
	$lavanderia=$_POST['lavanderia'];
	$quintal=$_POST['quintal'];
	$locacao=$_POST['locacao'];
	$banheiro=$_POST['banheiro'];
	$cozinha=$_POST['cozinha'];
	$andares=$_POST['andares'];
	$preco=$_POST['preco'];
	$cidade=$_POST['cidade'];
	$metrosQuadrados=$_POST['metrosQuadrados'];
	$localizacao=$_POST['localizacao'];
	$estado=$_POST['estado'];
	$status=$_POST['status'];
	$idUsuario=$_SESSION['idUsuario'];
	$relacionado=$_POST['relacionado'];
	$andarApto=$_POST['andarApto'];
	
	$aimage=$_FILES['aimage']['name'];
	$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['name'];
	$aimage3=$_FILES['aimage3']['name'];
	$aimage4=$_FILES['aimage4']['name'];
	
	$fimage=$_FILES['fimage']['name'];
	$fimage1=$_FILES['fimage1']['name'];
	$fimage2=$_FILES['fimage2']['name'];
	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];
	$temp_name3 =$_FILES['aimage3']['tmp_name'];
	$temp_name4 =$_FILES['aimage4']['tmp_name'];
	
	$temp_name5 =$_FILES['fimage']['tmp_name'];
	$temp_name6 =$_FILES['fimage1']['tmp_name'];
	$temp_name7 =$_FILES['fimage2']['tmp_name'];
	
	move_uploaded_file($temp_name,"admin/imoveis/$aimage");
	move_uploaded_file($temp_name1,"admin/imoveis/$aimage1");
	move_uploaded_file($temp_name2,"admin/imoveis/$aimage2");
	move_uploaded_file($temp_name3,"admin/imoveis/$aimage3");
	move_uploaded_file($temp_name4,"admin/imoveis/$aimage4");
	
	move_uploaded_file($temp_name5,"admin/imoveis/$fimage");
	move_uploaded_file($temp_name6,"admin/imoveis/$fimage1");
	move_uploaded_file($temp_name7,"admin/imoveis/$fimage2");
	
	
	$sql = "UPDATE imoveis SET imovelTitulo= '{$imovelTitulo}', imovelConteudo= '{$imovelConteudo}', imovelTipo='{$imovelTipo}', comodos='{$comodos}', locacao='{$locacao}',
	quartos='{$quartos}', banheiro='{$banheiro}', lavanderia='{$lavanderia}', cozinha='{$cozinha}', quintal='{$quintal}', andares='{$andares}', 
	metrosQuadrados='{$metrosQuadrados}', preco='{$preco}', localizacao='{$localizacao}', cidade='{$cidade}', estado='{$estado}', relacionado='{$relacionado}',
	pimage='{$aimage}', pimage1='{$aimage1}', pimage2='{$aimage2}', pimage3='{$aimage3}', pimage4='{$aimage4}',
	idUsuario='{$idUsuario}', status='{$status}', mapimage='{$fimage}', topmapimage='{$fimage1}', groundmapimage='{$fimage2}', 
	andarApto='{$andarApto}' WHERE idImovel = {$idImovel}";
	
	$result=mysqli_query($con,$sql);
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Imovel atualizado</p>";
		header("Location:relacao.php?msg=$msg");
	}
	else{
		$msg="<p class='alert alert-warning'>Erro em atualizar</p>";
		header("Location:relacao.php?msg=$msg");
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
    <div class="row"> 
		<?php include("include/header.php");?>
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Atualizar Imovel</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form method="post" enctype="multipart/form-data">
								
								<?php
									
									$idImovel=$_REQUEST['id'];
									$query=mysqli_query($con,"select * from imoveis where idImovel='$idImovel'");
									while($row=mysqli_fetch_row($query))
									{
								?>
												
								<div class="description">
									<h5 class="text-secondary">Informações Básicas</h5><hr>
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Titulo</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="imovelTitulo" required value="<?php echo $row['1']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Conteudo</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="imovelConteudo" rows="10" cols="30"><?php echo $row['2']; ?></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Tipo de Imovel</label>
													<div class="col-lg-9">
														<select class="form-control" required name="imovelTipo">
															<option value="">Selecione</option>
															<option value="Apartamento">Apartamento</option>
															<option value="Flat">Flat</option>
															<option value="Construcoes">Construcoes</option>
															<option value="Casa">Casa</option>
															<option value="Kitnet">Kitnet</option>
															<option value="Studio">Studio</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Tipo de Contrato</label>
													<div class="col-lg-9">
														<select class="form-control" required name="locacao">
															<option value="">Selecione</option>
															<option value="Aluguel">Aluguel</option>
															<option value="Venda">Venda</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Banheiro</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="banheiro" required value="<?php echo $row['7']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Cozinha</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="cozinha" required value="<?php echo $row['9']; ?>">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<select class="form-control" required name="bhk">
														<option value="">Qtd. Comodos</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8 +">8 +</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Quartos</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="quartos" required value="<?php echo $row['6']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">lavanderia</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="lavanderia" required value="<?php echo $row['8']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Quintal</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="quintal" required value="<?php echo $row['10']; ?>">
													</div>
												</div>
												
											</div>
										</div>
										<h5 class="text-secondary">Preço & Localização</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Andares</label>
													<div class="col-lg-9">
														<select class="form-control" required name="andares">
														<option value="">Selecione</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Preco</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="preco" required value="<?php echo $row['13']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Cidade</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="cidade" required value="<?php echo $row['15']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Estado</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="estado" required value="<?php echo $row['16']; ?>">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Andar do Apto</label>
													<div class="col-lg-9">
														<select class="form-control" required name="andarApto">
														<option value="">Selecione o andar</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Metros Quadrados</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="metrosQuadrados" required value="<?php echo $row['12']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Localizacao</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="localizacao" required value="<?php echo $row['14']; ?>">
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-lg-2 col-form-label">Relação</label>
											<div class="col-lg-9">
											<p class="alert alert-danger">* Não mude o conteudo, mude: <b>Sim</b> ou <b>Não</b> ou os detalhes</p>
											
											<textarea class="tinymce form-control" name="relacionado" rows="10" cols="30">
												
													<?php echo $row['17']; ?>
												
											</textarea>
											</div>
										</div>
												
										<h5 class="text-secondary">Imagem & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" required="">
														<img src="admin/property/<?php echo $row['18'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" required="">
														<img src="admin/property/<?php echo $row['20'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" required="">
														<img src="admin/property/<?php echo $row['22'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Selecione</option>
															<option value="disponivel">Disponivel</option>
															<option value="indisponivel">Indisponivel Out</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagens dos Arredores</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage1" type="file">
														<img src="admin/property/<?php echo $row['26'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" required="">
														<img src="admin/property/<?php echo $row['19'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">imagem 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" required="">
														<img src="admin/property/<?php echo $row['21'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage" type="file">
														<img src="admin/property/<?php echo $row['25'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage2" type="file">
														<img src="admin/property/<?php echo $row['27'];?>" alt="pimage" height="150" width="180">
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submit" class="btn btn-success"name="add" style="margin-left:200px;">
										
									</div>
								</form>
								
							<?php
								} 
							?>
                    </div>            
            </div>
        </div>
		<?php include("include/footer.php");?>
    </div>
</div>
<script src="js/jquery.min.js"></script> 
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
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