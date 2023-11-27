<?php
include("conexao.php");
$idImovel = $_GET['idImovel'];
$sql = "DELETE FROM imovel WHERE idImovel = {$idImovel}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Imovel deletado</p>";
	header("Location:relacao.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Imovel não foi deletado</p>";
	header("Location:relacao.php?msg=$msg");
}
mysqli_close($con);
?>