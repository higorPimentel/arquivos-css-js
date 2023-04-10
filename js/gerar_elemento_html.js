/*
*   GERAR ELEMENTO E INSEIR NO FORMULARIO 
*
*/       


    $('<div  class="card_representante" >' + 
            '<div>'+
            `<span class="nome_rep">${arry_ret_rep[n].nome_user.toUpperCase()}</span>`+
            '</div>'+
            '<div>'+
            '<span class="contato_rep">'+
            `<div class="tit_item">${titulo_cpf}:</div>` +
            `<div class="resp_item">${vlr_cpf}</div>`+
            '</span>'+
            '</div>'+
            '<div>'+
            '<span class="contato_rep">'+
            '<div class="tit_item">Contato:</div>' +
            `<div class="resp_item">${frmt_fone(arry_ret_rep[n].telefone)}</div>`+
            '</div>', {
            class: 'teste',
            'value': ''
            }).appendTo('.frm_representante');
