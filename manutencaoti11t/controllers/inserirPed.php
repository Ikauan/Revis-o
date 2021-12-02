<?php
include_once("../models/conexao.php");
include_once("../models/bancoPedido.php");
include_once("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(cadastrarPed($conexao,$nomePed,$emailPed,$telefonePed,$problemaPed)){
    echo("<img src=../img/emoticon-laughing-wiping-tears-away-600w-564985714.png>");
}else{
    echo("Pedido não cadastrado");
}


include_once("../views/footer.php");