# Oficina 2.0

## Este repositório contém um sistema básico de CRUD voltado para uma oficina fictícia.

No projeto não foram utilizados frameworks, sendo o mesmo redigido em código puro.

## Passo 1
Para execução da aplicação, é necessário instalar o WAMPSERVER, que possui o interpretador PHP, o servidor APACHE e o MySQL.

## Passo 2
Para acessar às páginas, é necessário criar um banco de dados que servirá de base para os cadastros e ações da aplicação.

O link a seguir contém o documento SQL para criação do mesmo: [https://github.com/F-SpaceMan/oficina2.0/blob/master/oficina.sql]()

É necessário que o banco seja MySQL.

## Passo 3
Após isso, o projeto Oficina2p0 deve ser copiado/movido para a pasta www do WAMP e, com o software funcionando, deve-se acessar a página localhost do WAMP e seguir suas instruções para criação de um VirtualHost.

É importante verificar a porta do MySQL, pois, de acordo com a máquina e sua configuração, a mesma pode variar.

### Reforçando, verifique se a porta, o usuário e a senha são os mesmos que os apresentados no código para a sua máquina e altere os valores conforme o necessário.

A porta utilizada para o BD no projeto é a 3308.

## Passo 4
Com a aplicação online e o o banco pronto, basta acessar a página localizada em Your VirtualHost na página localhost.

É necessário povoar a tabela pelo preenchimento do formulário da tela de cadastro de orçamentos.

## Observações:

Alguns navegadores podem não ser compatíveis com o campo datetime-local, utilizado para preenchimento de data e hora nos formulários. Recomenda-se o Google Chrome.

![bg](red)





