<?php



    $NOME = $_REQUEST['NOME'];

    $ANIMAL = $_REQUEST['ANIMAL'];



    if(empty($NOME)){

        

        $dados = array(

            "tipo" => 'error',

            "mensagem" => 'Existem(m) campo(s) obrigatório(s) não preenchido(s).'

        );

    

    } else {



        switch($ANIMAL){

            case '1' : $dados = array(

                "tipo" => 'cachorro.jpg',

                "mensagem" => 'Olá '.$NOME.', sabemos que seu animal preferido é o cachorro'

            );

            break;

            case '2' : $dados = array(

                "tipo" => 'gato.jpg',

                "mensagem" => 'Olá '.$NOME.', sabemos que seu animal preferido é gato'

            );

            break;

            case '3' : $dados = array(

                "tipo" => 'peixe.jpg',

                "mensagem" => 'Olá '.$NOME.', sabemos que seu animal preferido é o peixe'

            );

            break;
            case '4' : $dados = array(

                "tipo" => 'porco.jpg',

                "mensagem" => 'Olá '.$NOME.', sabemos que seu animal preferido é o porco'

            );

            break;


        }



    }



    echo json_encode($dados);