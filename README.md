
### Step by step
Repository clone
```sh
git clone https://github.com/leowebdesigner/app-6a6ghf11.git
```

```sh
cd app-6a6ghf11
```

remove versioning
```sh
rm -rf .git/
```

Update file environment variables .env
```dosini
APP_NAME=name
APP_URL=http://localhost:porta

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mysql
DB_USERNAME=root
DB_PASSWORD=

```

Install project dependencies
```sh
composer install
```


Generate Laravel project key
```sh
php artisan key:generate
```

Run Migrations
```sh
php artisan migrate
```

Access the project
[http://localhost:porta](http://localhost:8989)

Requeriments
```sh
PHP 8.1
Laravel 9
Composer 2.4
```
