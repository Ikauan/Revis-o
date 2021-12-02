<?php 
function cadastrarPed($conexao,$nomePed,$emailPed,$telefonePed,$problemaPed){
    $query = "insert into tbpedido(nomePed,emailPed,telefonePed,problemaPed)values('{$nomePed}','{$emailPed}','{$telefonePed}','{$problemaPed}')";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaPed($conexao){
    $query = "Select * From tbpedido";

    $resultados= mysqli_query($conexao,$query);
    return $resultados;
}

function listacodPed($conexao,$codPed){
    $query = "Select * from tbpedido where codPed={$codPed}";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function delPed($conexao,$codPed){
    $query = "delete from tbpedido where codPed=$codPed";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function altPed($conexao,$codPed,$nomePed,$emailPed,$telefonePed,$problemaPed){
    $query = "update tbpedido set nomePed ='{$nomePed}', emailPed = '{$emailPed}', telefonePed = '{$telefonePed}', problemaPed = '{$problemaPed} where codPed = '{$codPed}'";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}