<style>
  img{
    padding: 15px;
    margin-top: 150px;
    margin-left: 470px;

  }
    
</style>

<?php
include_once("../models/bancoPedido.php");
include_once("../models/conexao.php");
include_once("../views/header.php");
extract($_REQUEST,EXTR_OVERWRITE);

if (altPed($conexao,$codPed,$nomePed,$emailPed,$telefonePed,$problemaPed)){
    echo("<img src=../img/ok-yellow-emoticon-cartoon-funny-emoji-character_106878-269.png>");
}else{
    echo("Não alterado.");
}


include_once("../views/footer.php");