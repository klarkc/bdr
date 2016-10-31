# BDR
Repositório prova técnica BDR

## Instalação
### Pré-requisitos:
1. [PHP >= 5.3](https://www.php.net/)
2. [Composer](https://getcomposer.org/)
3. [Bower](http://bower.io/)

```bash
sudo npm install -g bower
bower install
composer install
```

## Testes

```bash
./Console/cake test app
```

## Criar tabelas no BD
```bash
./Console/cake schema create
```

## Servidor de desenvolvimento

```bash
./Console/cake server -p 8000
```

## API

| HTTP format |	URL format | Controller action invoked |
|-------------|------------|---------------------------|
| GET | /tasks.json | TasksController::index() |
| GET | /tasks/123.json | TasksController::view(123) |
| POST | /tasks.json | TasksController::add() |
| POST | /tasks/123.json | TasksController::edit(123) |
| PUT | /tasks/123.json | TasksController::edit(123) |
| DELETE | /tasks/123.json | TasksController::delete(123) |
