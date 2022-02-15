<?php

$NOME = $_REQUEST['NOME'];
$ANIMAL = $_REQUEST['ANIMAL'];

if(empty($NOME)){

    $dados = array ( 
        "tipo" => "error";
        "mensagem" => 'Existem(m) campo(s) obrigatorio(s) nao  preechido(s).'
    )
}

else{

    switch($ANIMAL){
        case '1' : $dados = array (
            "tipo" => 'cachorro.jfif',
            "mensagem" => 'Ola ' .$NOME. ', sabemos que seu animal preferido e o cachorro'
        );
        break;
        case '2' : $dados = array (
            "tipo" => 'peixe.jfif',
            "mensagem" => 'Ola ' .$NOME. ', sabemos que seu animal preferido e o peixe'
        );
        break;
    }
    case '3' : $dados = array (
        "tipo" => 'gato.jfif',
        "mensagem" => 'Ola ' .$NOME. ', sabemos que seu animal preferido e gato'
    );
}

echo json_decode($dados);




