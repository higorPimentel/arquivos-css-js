//header form

         <form enctype="multipart/form-data"   method="POST" id="frm_registro" class="forms">


 	var fd = new FormData();
        var arquivos = $('#arquivo_import')[0].files[0];	
         fd.append ('arquivo', arquivos);
    
        
    
    
                $.ajax({
                    url: 'php/read_file.php',
                    type:'POST',
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(retorna){ 

		})


/*
$file = $_FILES["arquivo"];
move_uploaded_file($file["tmp_name"], "$dir_destino/".$file["name"]);
//processando o arquivo
$arquivo_csv =  "$dir_destino/".$file["name"]; 
*/