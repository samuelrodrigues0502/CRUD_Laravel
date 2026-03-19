# CRUD de Produtos com Laravel

Aplicação web de cadastro de produtos desenvolvida com Laravel, contendo operações completas de CRUD (criar, listar, editar e excluir), interface em Blade e persistência com SQLite.

## Sumário

- [Visão Geral](#visão-geral)
- [Funcionalidades](#funcionalidades)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Requisitos](#requisitos)
- [Como Executar Localmente](#como-executar-localmente)
- [Rotas Principais](#rotas-principais)
- [Executando Testes](#executando-testes)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Possíveis Melhorias](#possíveis-melhorias)


## Visão Geral

Este projeto foi construído para demonstrar um fluxo completo de gerenciamento de produtos com Laravel.

A aplicação permite:

- cadastrar novos produtos;
- visualizar a lista de produtos;
- editar informações de produtos existentes;
- excluir produtos com confirmação;
- validar dados de entrada no backend.

## Funcionalidades

- CRUD completo de produtos.
- Validação de formulário no backend (`name` e `price`).
- Feedback visual de sucesso e erro para o usuário.
- Testes automatizados de feature e unit.
- Banco SQLite para setup rápido em ambiente local.

## Tecnologias Utilizadas

- PHP 8.2+
- Laravel 12
- Blade (views)
- SQLite
- PHPUnit
- AdminLTE (estilização da interface)

## Requisitos

- PHP 8.2 ou superior
- Composer
- Extensões PHP habilitadas:
  - `fileinfo`
  - `pdo_sqlite`
  - `sqlite3`
  - `zip`

## Como Executar Localmente

### 1) Clonar o repositório

```bash
git clone https://github.com/samuelrodrigues0502/CRUD_Laravel.git
cd CRUD_Laravel
```

### 2) Instalar dependências

```bash
composer install
```

### 3) Configurar ambiente

```bash
cp .env.example .env
php artisan key:generate
```

### 4) Preparar banco de dados

```bash
php artisan migrate
```

### 5) Iniciar servidor de desenvolvimento

```bash
php artisan serve
```

Acesse no navegador:

- http://127.0.0.1:8000
- http://127.0.0.1:8000/products

## Rotas Principais

| Método | Rota                  | Descrição                |
|-------:|-----------------------|--------------------------|
| GET    | /                     | Lista de produtos        |
| GET    | /products             | Lista de produtos        |
| GET    | /products/create      | Formulário de cadastro   |
| POST   | /products             | Criação de produto       |
| GET    | /products/{id}/edit   | Formulário de edição     |
| PUT    | /products/{id}        | Atualização de produto   |
| DELETE | /products/{id}        | Exclusão de produto      |

## Executando Testes

```bash
php artisan test
```

## Estrutura do Projeto

```text
app/
  Http/Controllers/
    ProductController.php
  Models/
    Product.php

database/
  migrations/
    *_create_products_table.php
  database.sqlite

resources/
  views/
    products/
      create.blade.php
      edit.blade.php
      index.blade.php

routes/
  web.php

tests/
  Feature/
    ProductCrudTest.php
  Unit/
    ProductModelTest.php
```

## Possíveis Melhorias

- Paginação na listagem de produtos.
- Busca e filtros por nome/preço.
- Autenticação e autorização.
- Máscara e formatação monetária no frontend.
- Testes de validação com cenários de erro.

