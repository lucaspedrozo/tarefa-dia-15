<?php


    $NOME = $_REQUEST['NOME'];
    $BEBIDA = $_REQUEST['BEBIDA'];
    $DATA =  $_REQUEST['DATA'];

    $Ano_Atual = date('Y');

    $Ano_Nasc = date("Y", strtotime($DATA));

    $idade = $Ano_Atual - $Ano_Nasc ;


    if(empty($NOME && $BEBIDA && $DATA)){

        

        $dados = array(

            "tipo" => 'error',

            "mensagem" => 'Existem(m) campo(s) obrigatório(s) não preenchido(s).'

        );


    

    } else 
    {
        if($idade >= 18){
        $dados = array(

        "mensagem" => 'Seu nome é '.$NOME. " <br> sua bebida escolhida é " .$BEBIDA. " <br> Sua idade é " . $idade. "  <br> entao vc e de maior");
        }
    
        else {
        $dados = array(
        "mensagem" => 'Seu nome é '.$NOME. " <br> sua bebida escolhida é " .$BEBIDA. " <br> Sua idade é " . $idade. "  <br> entao vc e de menor");
        }



}


    echo json_encode($dados);