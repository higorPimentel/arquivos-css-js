/*

>>>>>>>>>>>>>>>>>>>>>>>>> ESTRUTURA DA TABELA <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

			     <div  class="row">	
                            <div class="grupo_cxs col-6 grupo_table" id="grupo_cx_id">
                            
                                <div class='container_table'>
                                        <table id='table_list'  class='frmt_tabela_fretes'>                                            
                                        </table>
                                </div>
                            </div>
                    </div>

*/

function mont_table(){


	var cod = 1	
	let itm = 0



	 tbl = '';	
	 tbl +='<tr>'	
	 tbl +='<th id="">Coluna 1</th>'
	 tbl +='<th id="">Coluna 2</th>'
	 tbl +='<th id="">Coluna 3</th>'	

	 	
	
	 tbl +='</tr>'
	
	
	for(let i = 0; i < dados_table_load.length; i++) {

				if (cod === 3) {
					cod = 1
				}
				

				if (cod === 1) {
					var cls = 'styline_line_table_2'
				} else if (cod === 2) {
					var cls = 'styline_line_table_1'
				}

			tbl +=`<tr>`
			tbl +=`<td id=it${i}>${dados_table_load[i].Field}</td>`
			tbl +=`<td id=it${i}>${dados_table_load[i].Tabela}</td>`
			tbl +=`<td id=it${i}>${dados_table_load[i].Type}</td>`
			
		
	
			
						
			tbl +='</tr>'

			cod++;
			itm ++;	
			

	}

	
	$('#table_list').html(tbl);
	$('.vlr_tit_list').html(itm);
	

}