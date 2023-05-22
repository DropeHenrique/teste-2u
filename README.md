# Teste do processo seletivo Tecnologia 2U 2023

Este é o projeto desenvolvido para o teste do processo seletivo da Tecnologia 2U em 2023.

## Introdução ao Projeto

O teste consiste em criar uma tela de cadastro responsiva utilizando Bootstrap, com a funcionalidade de preenchimento automático do endereço a partir do CEP. Os dados inseridos no formulário devem ser salvos em um banco de dados MySQL.

## Arquivos do Projeto

O projeto contém os seguintes arquivos:

- `index.php`: Arquivo principal que contém o código HTML e PHP da tela de cadastro.
- `salvar.php`: Arquivo PHP responsável por salvar os dados do formulário no banco de dados.
- `cep.js`: Arquivo JavaScript que realiza a busca do endereço a partir do CEP utilizando a API ViaCEP.
- `database.sql`: Arquivo SQL contendo a estrutura do banco de dados e a tabela "cadastros".

## Como Executar o Projeto

1. Faça o download ou clone este repositório em seu ambiente local.
2. Crie um banco de dados MySQL com o nome "testeu2".
3. Importe o arquivo `database.sql` para criar a estrutura do banco de dados e a tabela "cadastros".
4. Configure as informações de conexão com o banco de dados no arquivo `salvar.php` (variáveis $servername, $username, $password e $dbname).
5. Abra o arquivo `index.php` em um navegador web.
6. Preencha o formulário de cadastro e clique em "Cadastrar" para salvar os dados no banco de dados.

## Contribuição

Este projeto foi desenvolvido como parte do processo seletivo da Tecnologia 2U. Contribuições adicionais não são esperadas.

Se você tiver alguma dúvida ou problema relacionado a este projeto, sinta-se à vontade para abrir uma nova issue neste repositório.

