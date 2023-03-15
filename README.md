### Manualmente

As principais dependências do projeto são:

- Laravel 8.0
- PHP 7.4 ou 8.0
- Mysql 8.0

Para instalar o projeto, primeiro instale e configure as dependências via composer:

```bash
composer install
composer dump-autoload
```

Agora, faça uma cópia do arquivo `.env.example` com o nome `.env` e configure os seguintes campos:

- **APP_ENV**: Local do projeto. Pode ter os valores _local_, _staging_ e _production_
- **APP_DEBUG**: Booleano onde, se verdadeiro, ativa as exceções no framework para o modo debug
- **APP_URL**: URL completa com o domínio do projeto
- **WEBSITE_URL**: URL completa com o domínio do website principal
- **DB_\[...\]**: Configurações do banco de dados

Em seguida, configure a chave de segurança do projeto, para operações que exigem criptografia:

```bash
php artisan key:generate
```

Agora, crie um schema no banco de dados chamado ```HXY``` e rode o comando em seu terminal:

```bash
php artisan migrate
```

Logo após para inicializar o servidor, use o comando `php artisan serve` fornecido pelo Laravel.