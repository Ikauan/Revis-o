<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoPedido.php");
?>
<div class="container">
<form method="POST" action="../controllers/alterarPed.php">
<?php 
$codPed=$_POST['alterarPed'];
$Ped=listacodPed($conexao,$codPed);
?>
    <p>Código <input type="text" name="codPed" value="<?=$Ped['codPed']?>" ></p>
    <p>Nome <input type="text" name="nomePed" value="<?=$Ped['nomePed']?>"></p>
    <p>Email <input type="text" name="emailPed" value="<?=$Ped['emailPed']?>"></p>
    <p>Telefone <input type="text" name="telefonePed" value="<?=$Ped['telefonePed']?>"></p>
    <p>Probelma <input type="text" name="problemaPed" value="<?=$Ped['problemaPed']?>"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
<?php
include_once("../views/footer.php");
?>