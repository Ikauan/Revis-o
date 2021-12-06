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

<div id="margin" class="container border border border-dark">
    <div id="margem">
        <form method="POST" action="../controllers/inserirPed.php">
        
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required readonly>Código</label>
    <input type="text" class="form-control" name="codPed" value="<?=$Ped['codPed']?>" aria-describedby="emailHelp">
  </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required>Nome</label>
    <input type="text" class="form-control" name="nomePed" value="<?=$Ped['nomePed']?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required>Email</label>
    <input type="email" class="form-control" name="emailPed" value="<?=$Ped['emailPed']?>"aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required>Telefone</label>
    <input type="text" class="form-control" name="telefonePed"  value="<?=$Ped['telefonePed']?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required>Problema</label>
    <input type="text" class="form-control"  name="problemaPed" value="<?=$Ped['problemaPed']?>"  aria-describedby="emailHelp">
  </div>
            <button type="submit" class="btn btn-dark">Salvar</button>
        </form>
    </div>
</div>

</form>
</div>
<?php
include_once("../views/footer.php");
?>