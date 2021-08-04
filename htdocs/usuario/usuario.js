function logar(){

	var login = $('#login').val();
	var senha = $('#senha').val();
	var acao = $('#acao').val();

	$.ajax({

		type:"POST",
		url:"controleVisao/controleUsuario.php",
		data:{acao:acao, login:login, senha:senha},

		success: function(data){
		console.log(data);
		if(data==1){

			alert('Login success!');
			window.location.href='principal.php';

		}else{

			alert('Insira os dados corretamente');
			window.location.href='../index.php';
		}

		}

	});
}

function principal(){
	window.location.href='principal.php';
}

function editar(){
	window.location.href="editar.php";
}

function telaEditar(valor){
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
	
}

function editando(){
	
	var nome = $('#nome').val();
	var idade = $('#idade').val();
	var id = $('#id').val();
	
	$.ajax({
		
		type:"POST", 
		url:"controleVisao/controleUsuario.php",
		data:{acao:"altera", nome:nome, idade:idade, id:id}, 
		
		success: function(data){
			
			alert('Usuário atualizado');
			window.location.href='listarCliente.php';
		}
	
	});
	
}

function cadastro(valor){
	window.location.href='cadastro.php';
}

function cadastrar(){

	var nome = $('#nome').val();
	var idade = $('#idade').val();
	//var cidade = $('#cidade').val();

	$.ajax({

		type:"POST",
		url:"controleVisao/controleUsuario.php",
		data:{acao:"inserir", nome:nome, idade:idade},

		success: function(data){

			alert('cadastrado');
			window.location.href='listarCliente.php';
		
		}
	})
}

function listar(){

	window.location.href='listarCliente.php';

}

function deletar(valor){
	
	 var confirmar = confirm("Deseja apagar");
	
	if(confirmar == true){
		$.ajax({

		type:"POST",
		url:"controleVisao/controleUsuario.php",
		data:{acao:"deletar", id:valor},

		success: function(data){

		alert('Client deleted!');
		window.location.href = 'listarCliente.php';

	}

	});
	}else{
		alert("Não apagou");
	}
	

}