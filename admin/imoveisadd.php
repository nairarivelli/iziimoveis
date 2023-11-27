<?php
require("config.php");


$error="";
$msg="";
if(isset($_POST['add']))
{
	
	$imovelTitulo=$_POST['imovelTitulo'];
	$imovelConteudo=$_POST['imovelConteudo'];
	$imovelTipo=$_POST['imovelTipo'];
	$comodos=$_POST['comodos'];
	$quartos=$_POST['quartos'];
	$quintal=$_POST['quintal'];
	$lavanderia=$_POST['lavanderia'];
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
	$temRelacao=$_POST['temRelacao'];
	
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
	
	move_uploaded_file($temp_name,"imoveis/$aimage");
	move_uploaded_file($temp_name1,"imoveis/$aimage1");
	move_uploaded_file($temp_name2,"imoveis/$aimage2");
	move_uploaded_file($temp_name3,"imoveis/$aimage3");
	move_uploaded_file($temp_name4,"imoveis/$aimage4");
	
	move_uploaded_file($temp_name5,"imoveis/$fimage");
	move_uploaded_file($temp_name6,"imoveis/$fimage1");
	move_uploaded_file($temp_name7,"imoveis/$fimage2");
	
	$sql="INSERT INTO imoveis(imovelTitulo,imovelConteudo,imovelTipo,comodos,locacao,quartos,banheiro,quintal,cozinha,lavanderia,andares,metrosQuadrados,preco,localizacao,cidade,estado,relacionado,pimage,pimage1,pimage2,pimage3,pimage4,idUsuario,status,mapimage,topmapimage,groundmapimage,andarApto, temRelacao)
	VALUES('$imovelTitulo','$imovelConteudo','$imovelTipo','$comodos','$locacao','$quartos','$banheiro','$quintal','$cozinha','$lavanderia','$andares','$metrosQuadrados','$preco',
	'$localizacao','$cidade','$estado','$relacionado','$aimage','$aimage1','$aimage2','$aimage3','$aimage4','$uid','$status','$fimage','$fimage1','$fimage2','$andarApto', '$temRelacao')";
	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Imovel inserido!</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Tente novamente</p>";
		}
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Imoveis</title>
		

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
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
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Adicionar detalhes do imovel</h4>
								</div>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body">
									<h5 class="card-title">Detalhes do Imovel</h5>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
                  <div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">imovelTitulo</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="imovelTitulo" required placeholder="Titulo do Imóvel">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-2 col-form-label">imovelConteudo</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="imovelConteudo" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>

											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Tipo de Propriedade</label>
													<div class="col-lg-9">
														<select class="form-control" required name="imovelTipo">
															<option value="">Selecione o tipo de imóvel</option>
															<option value="Apartamento">Apartamento</option>
															<option value="Flat">Flat</option>
															<option value="Construcoes">construcoes</option>
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
															<option value="">Selecione o tipo</option>
															<option value="Aluguel">Aluguel</option>
															<option value="Venda">Venda</option>
														</select>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">banheiro</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="banheiro" required placeholder="Qtd. Banheiro">
													</div>
												</div>


												<div class="form-group row">
													<label class="col-lg-3 col-form-label">cozinha</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="cozinha" required placeholder="Qtd. Cozinha">
													</div>
												</div>
											 
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">comodos</label>
													<div class="col-lg-9">
														<select class="form-control" required name="comodos">
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
													<label class="col-lg-3 col-form-label">quartos</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="quartos" required placeholder="Qtd. Quartos">
													</div>
												</div>


												<div class="form-group row">
													<label class="col-lg-3 col-form-label">quintal</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="quintal" required placeholder="Qtd. Quintal">
													</div>
												</div>


												<div class="form-group row">
													<label class="col-lg-3 col-form-label">lavanderia</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="lavanderia" required placeholder="Qtd. Lavanderia">
													</div>
												</div>
												</div>
										</div>

												
											</div>
										</div>
										<h4 class="card-title">Preço & Localização</h4>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
                        <label class="col-lg-3 col-form-label">andares</label>
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
														<input type="text" class="form-control" name="preco" required placeholder="R$ Preco">
													</div>
												</div>


												<div class="form-group row">
													<label class="col-lg-3 col-form-label">cidade</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="cidade" required placeholder="Digite a cidade">
													</div>
												</div>


												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Estado</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="estado" required placeholder="Digite o estado">
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
														<input type="text" class="form-control" name="metrosQuadrados" required placeholder="Entre os metros quadrados">
													</div>
												</div>


												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Endereço</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="localizacao" required placeholder="Digite o endereço">
													</div>
												</div>
												
											</div>
										</div>
										
											
											
										<h4 class="card-title">Imagem & Status</h4>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Selecione o Status</option>
															<option value="available">Disponivel</option>
															<option value="sold out">Indisponivel</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagens dos arredores</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage1" type="file">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">imagem 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">idUsuario</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="idUsuario" required placeholder="Entre com o ID do usuário">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage" type="file">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage2" type="file">
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Tem relação com outros imóveis?</b></label>
													<div class="col-lg-9">
														<select class="form-control" required name="temRelacao">
															<option value="">Selecione</option>
															<option value="0">Não</option>
															<option value="1">Sim</option>
														</select>
													</div>
												</div>
											</div>
										</div>


										
											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
										
								</div>
								</form>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
		
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>