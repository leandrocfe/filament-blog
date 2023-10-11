## Filament Blog - projeto exemplo
Projeto de exemplo

## Installation

Clone the repo locally:

```sh
git clone https://github.com/leandrocfe/filament-blog.git filament-blog && cd filament-blog
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Laravel sail:

```bash
sail up -d
```

Run database migrations:

```sh
sail artisan migrate --seed
```

Storage link:

```sh
sail artisan storage:link
```