<?php
include("../views/header.php");
?>
<style>
    #margem {
        padding: 15px;
    }
    #margin{
        margin-top: 15px;
    }
</style>
<div id="margin" class="container border border border-dark">
    <div id="margem">
        <form method="POST" action="../controllers/inserirPed.php">
            <p>Nome <input type="text" name="nomePed" required></p>
            <p>Email <input type="email" name="emailPed" required></p>
            <p>Telefone <input type="text" name="telefonePed" required></p>
            <p>Problema <input type="text" name="problemaPed" required></p>
            <button type="submit" class="btn btn-dark">Salvar</button>
        </form>
    </div>
</div>

<?php
include("../views/footer.php");
?>