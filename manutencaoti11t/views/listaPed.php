<?php
include_once("../views/header.php");
include_once("../models/bancoPedido.php");
include_once("../models/conexao.php");
?>

<hr>
<div class="container">
    <table class="table table-borderless">
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
        <tbody>
            <?php
            $pedido = listaPed($conexao);
            foreach ($pedido as $pedidos) :
            ?>
                <tr>
                    <th scope="row"><?= $pedidos['codPed'] ?></th>
                    <td><?= $pedidos['nomePed'] ?></td>
                    <td><?= $pedidos['emailPed'] ?></td>
                    <td><?= $pedidos['telefonePed'] ?></td>
                    <td><?= $pedidos['problemaPed'] ?></td>
                    <td>
                        <form action="../controllers/deletarPed.php" method="POST">
                            <input type="hidden" name="deletarPed" value="<?= $pedidos['codPed'] ?>">
                            <button type="submit" class="btn btn-dark">Deletar</button>
                        </form>
                    </td>
                    <td>
                        <form action="../views/altPed.php" method="POST">
                            <input type="hidden" name="alterarPed" value="<?= $pedidos['codPed'] ?>">
                            <button type="submit" class="btn btn-dark">Alterar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<hr>

<?php
include_once("../views/footer.php")
?>