function inserir(){

	var vnome  = $("#nome").val();
	var vidade = $("#idade").val();

	$.ajax({

		type:'POST',
		url:'insereBanco.php',
		data:{nome:vnome, idade:vidade},

		success: function(data){
			alert('nomes enviados');
		}

	});
	
}