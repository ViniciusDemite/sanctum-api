## O projeto

Esse projeto foi **baseado em um vídeo de construção de Api**. O projeto é o básico de construção simples de uma Api utilizando sistema de autentiação do Laravel Sanctum no Laravel 8.

-   [Vídeo base](https://www.youtube.com/watch?v=MT-GJQIY3EU).
-   [Conheça mais sobre Laravel](https://laravel.com/docs/8.x).
-   [Veja mais sobre o Laravel Sanctum](https://laravel.com/docs/8.x/sanctum#introduction).

## Como utilizar

Após baixar o projeto será necessário executar alguns comandos para poder executa-lo. No abra o terminal na pasta do projeto e utilize os seguintes comandos:

1. composer install (instalar todas as dependências necessárias)
2. cp .env.sample .env (clonar o sample do .env)
3. php artisan key:generate (gerar a chave da aplicação)
4. configurar o .env para o banco de dados a ser utilizado
5. php artisan migrate (criar as tabelas no banco de dados)
6. php artisan serve (inicializar a apliação)

Após esses comandos a aplicação já estará rodando no [localhost](http://localhost:8000). Como essa aplicação trata apenas a Api será necessário alguma ferramenta que consiga lidar com as requições http. Nos testes foi o utlizado o [Postman](https://www.postman.com/downloads/).

## Postman

Ao utilizar o Postman é possível utilizar o [arquivo json](../../sanctum-api.postman_collection.json) para importar as configurações das rotas e dados. Para testar as rotas: Create, Update e Delete será necessário seguir os seguintes passos:

1. Criar um novo usuário pela rota [register](http://localhost:8000/api/register)
2. Login com o usuário criado pela rota [login](http://localhost:8000/api/login)
3. Alterar o _Bearer Token_ pelo fornecido no Login
