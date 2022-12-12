<?php  


/*
*    
*  LER DADOS DE UMA REQUISÇÃO VBA, E GERAR UM CSV
*
*/


/*

  ----------------------------------------------------------------------------------

    REQUISIÇÃO VBA

  ----------------------------------------------------------------------------------

Url = "https://jogosvba.online/request_vba.php"

 Set Myrequest = CreateObject("WinHttp.WinHttpRequest.5.1")
    
 
  ' inicia Var dados e insere nome do arquivo a ser gerado
  dados = "nome_do_arquivo"        


  ' inclui identificador col para pular uma linha (Marcação de colunas)
  ' Separador usado pra separar os dados "," 
  dados = dados & "," & "info1,info2,col,info3,info4"
      
      
    Myrequest.SetTimeouts 5000, 5000, 1000, 1000
    Myrequest.Open "POST", Url, False

    Myrequest.send dados
    Myrequest.Status
          
            
   retorno = Myrequest.ResponseText
   ------------------------------------------------------------------------------------------

*/




/*
  ----------------------------------------------------------------------------------

   TRATA DADOS REQUISIÇÃO - GERA CSV

  ----------------------------------------------------------------------------------
*/


$conteudo = file_get_contents('php://input');
$array_dt = explode(",", $conteudo);


$arquivo = $array_dt[0] . ".csv";
$qtd_lines = (count($array_dt) - 1) / 2;
$qtd_cols =  count($array_dt);


$fp = fopen($arquivo,"w");



   for($k = 1;$k < $qtd_cols - 1; $k ++ ) {
                
            $item = $array_dt[$k];

                  if  ($item == 'col') {

                         $cont = "" .PHP_EOL;
                  } else {

                    $cont = $item . ",";
                                            
                  } 
                  
                       
                  
            
            fwrite($fp,$cont);
   
   } 


fwrite($fp,$cont);
fclose($fp);

    echo('finalizado');

?>