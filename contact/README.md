## EasyMail2.01

## Setup and Document

EasyMail document is [here](https://mubag.com/https://www.mubag.com/help).

Setup development Docker WSL2
```powershell
git clone git@github.com:FirstNetJapan/EasyMail2.01.git EasyMail201
```

```powershell
cd EasyMail201
```

```powershell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

```powershell
cp .env.example .env
```

.env

```powershell
DB_HOST=[make ps -> NAME string] 

make ps
easymail201-mariadb-1  "docker-entrypoint.s…" mariadb running.....
↓
.env
DB_CONNECTION=mysql
DB_HOST=easymail201-mariadb-1
DB_PORT=3306
DB_DATABASE=easymail
DB_USERNAME=root
DB_PASSWORD=
```

```powershell
make build
```

```powershell
make up
```

```powershell
make shell
```

```shell
npm install
```

>PHP7.4系で構築するとき   
> composer.json編集
>```powershell
>"config": {
>        "platform": {
>            "php": "7.4.21"
>         }
>   }
>```
>psr/log2.0 から下位バージョンにダウングレードの為にcomposer update
>```shell
>composer update
>```
>shellを抜けて
>```shell
>exit
>```
>仮想環境再起動
>```shell
>make down && make up && make shell
>```

```shell
npm rum dev
```

```shell
php artisan migrate
```

```shell
php artisan db:seed
```

>管理画面ログインアカウントを作成するときは   
>```shell
>php artisan command:SeedUser
>```
>Email: admin@example.com  
>PASS: 123456789  

```shell
php artisan storage:link
```

起動
```shell
php artisan serve
```

管理画面: [http://localhost/admin/login](http://localhost/admin/login)  
フロント: [http://localhost/](http://localhost)  

終了  
Ctrl + C



### Check it out
```powershell
php -v
PHP 8.1.13 (cli) (built: Nov 26 2022 14:07:55) (NTS)
```

```powershell
php artisan --version
Laravel Framework 8.83.27
```

```powershell
node -v
v16.19.0
```

```powershell
npm -v
9.3.1
```

---
## License

The EasyMail is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


### EasyMail サポート

| 2.00.xx     | 2.01.xx                 |
|-------------|-------------------------|
| laravel6.x  | laravel8.x              |
| PHP7.3      | PHP7.3 - 8.1            |
| Apache2.4.6 | Apache2.4.x NGINX1.2x   | 
| MySQL5.7.7  | MariaDB10.3+ MySQL5.7以上 |


### 開発環境
| EasyMail2.01.000  |               |
|-------------------|---------------|
| Laravel Framework | 8.83.27       |
| PHP               | 8.1.13        |
| MariaDB Server    | 10.9.2        |
| node              | v16.18.1      |
| npm               | 9.2.0         |
| Composer          | version 2.4.4 |


### Laravel サポートポリシー
https://readouble.com/laravel/9.x/ja/releases.html

| バージョン    | PHP (*)   |
|----------|-----------|
| 6 (LTS)  | 7.2 - 8.0 |
| 7        | 7.2 - 8.0 |
| 8        | 7.3 - 8.1 |
| 9        | 8.0 - 8.1 |
| 10       | 8.1       |
