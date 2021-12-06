<style>
  
    .container{
        padding: 15px;
    
        margin-top: 100px;
    };
    
</style>

<?php
include_once("../views/header.php");
include_once("../models/bancoPedido.php");
include_once("../models/conexao.php");
?>
<div class="container m-5 p-5">

<div class="container m-5 p-5">
<form action="visualizarCod.php" method="GET">
    <div class="row mb-3">
        <label for="inputCod" class="col-sm-2 col-form-label">Digite o Código do Pedido: </label>
        <div class="col-sm-3">
            <input type="number" name="codPed" class="form-control" id="inputCod" required>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-dark">Buscar</button>
        </div>
    </div>
</form>
</div>

            
<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Problema</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
<?php

        $codPed = isset($_GET['codPed'])?$_GET['codPed']:0;
        if($codPed>0){
            $visualizar = visualizar($conexao,$codPed);
            if($visualizar){ 
              
        ?>
        <tr>
            <th scope="row"><?=$visualizar['codPed']?></th>
            <td><?=$visualizar['nomePed']?></td>
            <td><?=$visualizar['emailPed']?></td>
            <td><?=$visualizar['telefonePed']?></td>
            <td><?=$visualizar['problemaPed']?></td>

            <td>
            <form action="../controllers/deletarPed.php" method="POST">
                            <input type="hidden" name="deletarPed" value="<?=$visualizar['codPed'] ?>">
                            <button type="submit" class="btn-small btn-danger">Deletar</button>
                        </form>
                    </td>
                    <td>
                        <form action="../views/altPed.php" method="POST">
                            <input type="hidden" name="alterarPed" value="<?=$visualizar['codPed'] ?>">
                            <button type="submit" class="btn-small btn-success">Alterar</button>
                        </form>
            </td>
            </tr>
<?php
            }
        }
include_once("footer.php");
?>