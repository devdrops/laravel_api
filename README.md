# API REST com Laravel 4.2
Estudo sobre API REST com Laravel. Com base no screencast [API REST com Laravel](https://www.youtube.com/watch?v=u6a1G7LpWFU) 
Screencast criado por [Fábio Vedovelli](https://twitter.com/vedovelli)
# Configuração das tabelas no banco de dados
Com o terminal vá até a pasta raiz do projeto e utilize o comando:
```console
php artisan migrate
``` 
Com este comando ele irá criar as tabelas migrate e users no se banco de dados (o banco de dados deve estar previamente criado).
#Rotas da api
Acesso a todos os usuários (GET)
```console
http://laravel_api.dev/api/user
``` 
Retorno de um usuário (GET)
```console
http://laravel_api.dev/api/user/1
``` 
Cadastro de usuário (POST)
```console
http://laravel_api.dev/api/user
``` 
Update de usuário (PUT)
```console
http://laravel_api.dev/api/user/1
``` 
Delete de usuário (DELETE)
```console
http://laravel_api.dev/api/user/1
``` 
Em caso de 404
```console
http://laravel_api.dev/docs
```
