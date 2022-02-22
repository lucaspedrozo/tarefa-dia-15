$(document).ready(function(){
    //monitorar o clique do botao 
    $('.btn-send').click(function(e){
            e.preventDefault()
      let dados = $('#form').serialize()

      $.ajax({
        type: 'POST',
        datatype:'JSON',
        assync: true,
        data: dados,
        url: '../modelo/retorno.php',
        success: function(){


        }
      }
      )
    })

})