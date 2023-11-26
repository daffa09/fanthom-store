<p align="center"><a href="" target="_blank"><img src="https://github.com/daffa09/fanthom-store/assets/68214221/868041dd-1c5e-4e9e-8861-1dfc8d8d5f26" width="900"></a></p>

## Fanthom Store

Fanthom Store is a simple CRUD web application using laravel 10 and also using docker to run this application. And inspired by this repo https://github.com/afifbasya/tokokita-laravel

## TECH STACK

1. Laravel 10
2. Docker
3. Tailwind CSS
4. Alpine JS
5. Sail
6. MySQL
7. PhpMyAdmin
8. Vite JS

## HOW TO USE THIS WEB APPLICATION

Make sure Docker is running and use the unix operating system for the terminal. But for windows you can use the wsl terminal.

-   clone this repository

```
git clone https://github.com/daffa09/fanthom-store.git
```

-   then open this project in your favorite code editor
-   rename the .env.exampple file to .env
-   open a terminal or wsl that points to this repo then type the following command:

```
make db-start
```

-   then type the following commands in sequence:

```
make db-migrate

make npm-install

make composer-install

make migrate

make storage-link
```

-   if there is no error then the application is ready to run, to run it type the following command:

```
make run
```
