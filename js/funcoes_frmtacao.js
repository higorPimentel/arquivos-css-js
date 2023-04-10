


function frmt_cpf(vlr){

     let vl_text = vlr.toString()
     let fd_frmt = vl_text.substring(0,3) + "."	
     fd_frmt += vl_text.substring(3,6) + "."	
     fd_frmt += vl_text.substring(6,9) + "-"
     fd_frmt += vl_text.substring(9,11)   

     return fd_frmt

}

function frmt_cnpj(vlr){

    let vl_text = vlr.toString()
    let fd_frmt = vl_text.substring(0,2) + "."	
    fd_frmt += vl_text.substring(2,5) + "."	
    fd_frmt += vl_text.substring(5,8) + "/"
    fd_frmt += vl_text.substring(8,12) + "-"
    fd_frmt += vl_text.substring(12,14)   

    return fd_frmt

}



function frmt_fone(vlr){

    let vl_text = vlr.toString()
    let fd_frmt = "(" +  vl_text.substring(0,2) + ") "	
    fd_frmt += vl_text.substring(2,7) + "-"	
    fd_frmt += vl_text.substring(7,11)  

    return fd_frmt

}

function frmt_vlr_vda(vlr) {

    arryCaract = ['0','1','2','3','4','5','6','7','8','9']
    vl_text = vlr
    Qtdcaract = vl_text.length
    txtReturn = ""  


    for(let k = 0; k < Qtdcaract; k ++) {

       txtPesq = vl_text.substr(k,1)

       if(txtPesq == ',') {
           txtReturn += '.'

        } else {
               for(let n = 0; n < arryCaract.length; n++) {
                
                   if(txtPesq == arryCaract[n]) {
                       txtReturn += arryCaract[n]
                   }
               }
           }
       }
   

               
        txtReturn = parseFloat(txtReturn)
        return txtReturn

}


function frmt_vlr_vda_exib(vlr) {

    arryCaract = [',','0','1','2','3','4','5','6','7','8','9']
    vl_text = vlr
    Qtdcaract = vl_text.length
    txtReturn = ""  


    for(let k = 0; k < Qtdcaract; k ++) {

       txtPesq = vl_text.substr(k,1)


               for(let n = 0; n < arryCaract.length; n++) {
                
                   if(txtPesq == arryCaract[n]) {
                       txtReturn += arryCaract[n]
                   }
               }
           }
       
   
        //txtReturn = 'R$ '+ txtReturn
        return txtReturn

}


function frmt_vlr_int(vlr) {

    arryCaract = ['0','1','2','3','4','5','6','7','8','9']
    vl_text = vlr
    Qtdcaract = vl_text.length
    txtReturn = ""  


    for(let k = 0; k < Qtdcaract; k ++) {

       txtPesq = vl_text.substr(k,1)


               for(let n = 0; n < arryCaract.length; n++) {
                
                   if(txtPesq == arryCaract[n]) {
                       txtReturn += arryCaract[n]
                   }
               }
           }
       
   
         return txtReturn

}


function frmt_moeda(vlr) {

     // 152.380.369,00
     //vlr = '15035680,30'

   vl_text = vlr
   Qtdcaract = vl_text.length
   txtReturn = ""
   txtReturn2 = ""  
   indx_p = -1
   ident_sep = 0

   for(let k = 1; k < Qtdcaract + 1; k ++) {      
      
           if (indx_p == 3) {
               txtReturn += '.'
               indx_p = 0
           }
      
            item = vlr.substr(-`${k}`,1)                   
               if(item ==','){
                   ident_sep = 1
               }                        

            txtReturn += item

   if(ident_sep ==1) {
       indx_p ++
   }

}

   Qtdcaract = txtReturn.length
   for(let n = 1; n < Qtdcaract + 1; n ++) {      
      
       item = txtReturn.substr(`-${n}`,1)      
       txtReturn2 += item
   
   }
  
       //txtReturn = 'R$ '+ txtReturn
       return txtReturn2

}