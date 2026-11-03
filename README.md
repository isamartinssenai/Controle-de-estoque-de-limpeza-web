# Controle de Estoque – Web

## Sobre o Projeto

Sistema Web desenvolvido para facilitar o gerenciamento e controle de estoque, permitindo o cadastro, consulta e organização dos produtos.

A aplicação foi desenvolvida utilizando Laravel e possui integração com banco de dados MySQL.

## Tecnologias Utilizadas

- PHP
- Laravel
- MySQL
- HTML
- CSS
- JavaScript
- Bootstrap
- Vite

## Funcionalidades

- Cadastro de usuários.
- Login e autenticação.
- Cadastro de produtos.
- Consulta de produtos.
- Gerenciamento de estoque.
- Controle de quantidade dos produtos.
- Definição de limites de estoque baixo e alerta.

## Banco de Dados

O sistema utiliza MySQL e possui três tabelas principais:

- ESTOQUE
- USUARIO
- TOKEN_USUARIO

## Como Executar

1. Clone o repositório:

```bash
git clone URL_DO_REPOSITORIO
```

2. Entre na pasta do projeto:

```bash
cd NOME_DA_PASTA
```

3. Instale as dependências do PHP:

```bash
composer install
```

4. Instale as dependências do JavaScript:

```bash
npm install
```

5. Configure o arquivo `.env` com os dados do banco de dados.

6. Gere a chave da aplicação:

```bash
php artisan key:generate
```

7. Execute as migrações, caso necessário:

```bash
php artisan migrate
```

8. Inicie o Laravel:

```bash
php artisan serve
```

9. Em outro terminal, inicie o Vite:

```bash
npm run dev
```

## Objetivo

Desenvolver um sistema Web para melhorar a organização, praticidade e controle das operações de estoque.
