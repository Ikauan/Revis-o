<?php
include("../model/conexao.php");
include("../model/bancoJogos.php");
include("../view/header.php");
?>
<style>
.container3 {
    margin: 0;
    background: yellow;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}
</style>
<div class="container3">
<div class="card">
<div class="card-body">
<?php
extract($_REQUEST,EXTR_OVERWRITE);
if(alterarJogos($conexao,$codJog,$nomeJog,$tamanhoJog,$precoJog,$requisitosJog,$consoleJog,$classificacaoJog,$avaliacaoJog)){
    echo("Jogo alterado com sucesso.");
}else{
    echo("Jogo não alterado.");
}
?>
</div>
</div>
</div>
<?php
include("../view/footer.php");
?>