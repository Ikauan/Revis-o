<?php
include_once("../models/conexao.php");
include_once("../models/bancoPedido.php");
include_once("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(delPed($conexao,$deletarPed)){
    echo("<img src=../img/kkkk.png>");
}else{
    echo("Pedido não deletado");
}


include_once("../views/footer.php");