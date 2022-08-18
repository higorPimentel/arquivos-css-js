
/*

>>>>>>>>>>>>>  DEFINE index_msg_execucao <<<<<<<<<<<<<<<<<<<<<<<<<<<
        
index_msg_erro = -500
index_msg_erro_desabilit = 30

*/


function exibe_erro(){



    $('#msg_erro').css('display','block')
    $('#msg_erro').css('right', index_msg_erro)
    index_msg_erro_desabilit = 30
    
    index_msg_erro  = index_msg_erro + 30
    
    if( index_msg_erro > 40) {
                    
        setTimeout(desabilita_erro,6000)
        return
    }
    

    setTimeout(acces_itm_erro,10)

 
}

function acces_itm_erro() {

exibe_erro();
}

function acces_itm_erro_desabilita() {

desabilita_erro()
}

function desabilita_erro(){

$('#msg_erro').css('right', index_msg_erro_desabilit)
    
    
index_msg_erro_desabilit  = index_msg_erro_desabilit - 30
    
    if( index_msg_erro_desabilit < -700) {
                    
                    return
    }
    
    
    setTimeout(acces_itm_erro_desabilita,10)


}