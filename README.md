# Sistema de Gestão de Usuários com PHP e Banco de Dados
## Descrição
Este sistema foi desenvolvido com a finalidade de demonstrar conhecimentos adquiridos em PHP, SQL e gerenciamento de permissões de acesso em uma aplicação web. Ele permite a administração e edição de usuários, fornecendo uma interface para visualizar, atualizar e gerenciar informações como CPF, e-mail, senha e status de ativação de um usuário.

## O projeto inclui:

Autenticação de usuários baseada em sessões.
Validação de dados e manipulação segura de informações no banco de dados.
Função de edição de usuários com controle de permissões.
Exibição e manipulação de dados do banco de dados com PHP e MySQL.
Este sistema também exemplifica o nível de aprofundamento em conceitos como segurança de senhas, gerenciamento de sessões e permissões de acesso.

## Funcionalidades
Autenticação e Controle de Sessão:

Verifica se o usuário está autenticado antes de permitir o acesso às funcionalidades de administração.
Caso não esteja autenticado, o sistema redireciona para a página de login.
Exibição de Dados de Usuário:

Ao acessar o painel de edição de usuário, as informações (como CPF, e-mail, status e senha) do usuário são carregadas automaticamente do banco de dados.
O sistema permite alterar esses dados, incluindo a opção de atualizar ou não a senha.
Gestão de Permissões:

Apenas usuários autenticados têm permissão para acessar e editar as informações de outros usuários.
As permissões são baseadas na sessão, onde os dados de autenticação são armazenados para garantir que o usuário tenha os direitos necessários para executar as ações.
Segurança de Senhas:

As senhas são manipuladas de forma segura com a utilização de funções de hash (sem criptografar ao enviar no seu último código conforme solicitado).
Ao editar a senha, ela será atualizada apenas se o campo estiver preenchido; caso contrário, a senha não será alterada.
Banco de Dados:

O sistema se conecta a um banco de dados MySQL, onde os dados dos usuários são armazenados e manipulados.
Utiliza PDO (PHP Data Objects) para interagir com o banco de dados de maneira segura e eficiente.
Interface de Usuário:

Interface simples utilizando o framework Bootstrap, permitindo que o sistema seja responsivo e fácil de usar em qualquer dispositivo.
Formulários para edição de usuários são apresentados de maneira clara, com validação básica de campos obrigatórios.
Requisitos
PHP 7.4 ou superior
Banco de Dados MySQL
Servidor web (Apache ou Nginx recomendado)
Bootstrap (para o estilo da interface, CDN utilizada)
PDO habilitado no PHP