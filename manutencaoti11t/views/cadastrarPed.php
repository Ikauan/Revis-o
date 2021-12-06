<?php
include("../views/header.php");
?>
<style>
  
    #margem {
        padding: 15px;
    }
    #margin{
        margin-top: 100px;
        
    }
</style>

<div id="margin" class="container border border border-dark">
    <div id="margem">
        <form method="POST" action="../controllers/inserirPed.php">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required>Nome</label>
    <input type="text" class="form-control" name="nomePed" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required>Email</label>
    <input type="email" class="form-control" name="emailPed" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required>Telefone</label>
    <input type="text" class="form-control" name="telefonePed" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required>Problema</label>
    <input type="text" class="form-control"  name="problemaPed" aria-describedby="emailHelp">
  </div>
            <button type="submit" class="btn btn-dark">Salvar</button>
        </form>
    </div>
</div>

<?php
include("../views/footer.php");
?>