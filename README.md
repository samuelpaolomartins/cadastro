# cadastro

Este projeto é uma atividade de aula do curso Técnico de Informática que estou fazendo, esta atividade ainda NÃO está finalizada, mas irei explicar o que já esta pronto.

Primeiramente a pessoa será direcionada a sua tela de login, lá deve inserir seu e-mail e senha para se conectar as outras telas, caso o e-mail ou a senha estiverem incorretos, será pedido para ser posto os dados corretamente, o login somente acontecerá se os dados inseridos forem iguais aos do banco de dados criado, por isso quando clicamos em "Entrar" é feito uma conexão com o banco de dados onde no código a ação é redirecionada a uma função js "logar" onde cria outra conexão com o arquivo "controleUsuario" que verifica a ação "logar" conectando à uma função "verificar" no "controle_usuario" onde verifica se os dados inseridos estão corretos ao fazer a conexão com o banco de dados, se tudo estiver correto o login será feito com sucesso.

Feito o login, o usuário será direcionado á uma tela chamada "principal" onde ele terá 3 opções que deseja realizar, "lista", "cadastro" e "editar".

Caso o usuário deseje ir à lista de clientes irá clicar em "lista", quando direcionado à tela "listarCliente" todos os clientes já cadastrados irão aparecer, mostrando seus nomes e suas idade e ao lado das idades terá duas opções, "editar" e "deletar", caso o usuário deseje deletar algum cliente basta clicar em "deletar" que o usuario desejado será apagado do banco de dados, caso ele queira editar as informações do usuário ele irá clicar em "editar", quando o cliente desejado para a alteração de dados for escolhido o usuário será direcionado para outra tela onde as informações do nome e idade estarão lá para serem alteradas, para que os dados do cliente apareçam na tela "editarUsuario" é feita uma conexão com o banco de dados, quando a opção "editar" for escolhida os dados do cliente são passados para uma função js "telaEditar" já com os valores coletados, e mais uma vez o usuário é direcinado à uma tela "editarUsuario" com os valores do cliente aparecendo na tela, quando algum dado for alterado e o usuário pressionar o botão "alterar" será feita uma conexão js na função "editando" já com os valores alterados e que irá fazer uma conexão com "controleUsuario" para verificar a ação "altera" com os novos dados e que novamente fará uma conexão com "controle_usuario" para salvar os dados alterados e fazer uma conexão com o banco de dados.

Se o usuário desejar fazer um cadastro de um cliente ele será direcionado à tela de "cadastro" onde ele irá cadastrar o nome, idade, cidade, estado, país e sexo do usuário. Esta parte ainda não está finalizada mas irei explicar a lógica do processo, na tela de "cadastro" as informações do cliente serão armazenadas através da conexão com o banco de dados, quando o usuário pressionar o botão "cadastrar cliente", será feito uma conexão com a função js "cadastrar" que fará mais uma conexão com a tela "controleUsuario" onde irá verificar a ação de "inserir" e fará uma conexão com "controle_usuario" onde irá guardar os dados inseridos do novo cliente e por fim fará a conexão com o banco de dados para armazenar as informações, quando o cadastro for finalizado o usuário será direcionado para a tela "listarCliente" com o novo cliente aparecendo na lista.

Há também a possibilidade do usuario editar algum cliente clicando no botão "editar" na tela "principal" onde ele será direcionado à uma tela "editar" e que nesta tela o usuário poderá escolher o nome que deseja alterar os dados pesquisando pelo nome na barra de pesquisa, quando o nome desejado aparecer, ao seu lado terá um botão "editar" e todos os dados do cliente serão mostrados na tela para serem alterados, o usuário será direcionado para a tela "editarUsuario" e o processo será o mesmo já explicado anteriormente. Esta parte também não está finalizada, somente a tela "editar" está feita, falta ainda fazer o nome pesquisado aparecer e seus dados aparecerem na outra tela.

Neste projeto há um controle de sessão, caso o usuário deseje ir à alguma tela, seja de listar ou de cadastrar por exemplo, sem fazer o login primeiro, ele será redirecionado à tela de login, obrigando o usuário a fazer seu login corretamente.
