# Filament - Permissions

## Sobre o Projeto

Este projeto foi desenvolvido com base na playlist **[Laravel Filament com ACL](https://youtube.com/playlist?list=PL8K_dpddZrwk_tAsaYdhxlEOkhELGM1mj&si=_o-sXsWJfxRPOHG3)**, criada por **Rômulo Ramos** (**GitHub: [rmsramos](https://github.com/rmsramos)**).

Meu objetivo é estudar e aprofundar no uso do **[Filament](https://filamentphp.com/)** — uma ferramenta de administração para projetos Laravel, e também entender melhor como funciona a biblioteca **[spatie/laravel-permission](https://spatie.be/docs/laravel-permission)**, que trata de permissões e controle de acesso (ACL) de forma bem prática.

## Passo a passo para a Instalação

### Clone Repositório

```sh
git clone https://github.com/gustavogordoni/filament-permissions.git
```

### Acesse o diretório

```sh
cd filament-permissions
```

### Crie o Arquivo .env

```sh
cp .env.example .env
```

### Suba os containers com Docker

```sh
docker compose up -d
```

### Acesse o container da aplicação

```sh
docker compose exec app bash
```

### Instale as dependências do Laravel

```sh
composer install
```

### Gere a chave da aplicação

```sh
php artisan key:generate
```

### Rode as migrations

```sh
php artisan migrate
```

### Rode as seeds

```sh
php artisan db:seed 
```

### Instale as dependências do frontend

```sh
npm install
```

### Compile os assets com Vite

```sh
npm run build
```

<!-- 
> Se estiver desenvolvendo, use `npm run dev` para recompilar automaticamente ao salvar os arquivos.
-->

## Acesse o Projeto

Abra no navegador: [http://localhost:7000](http://localhost:7000)
