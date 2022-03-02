## Main stages of development

##### 1. Installation Project Template. Create Database

`composer create-project --prefer-dist  laravel/laravel .`   
`npm install`  
`npm run dev`  

`git init`  
`git add .`  
`git commit –m "Comment"`  
**`git remote add origin https://github.com/SergeyHub/roles-permission.git`**  
`git push -u origin master`  

##### 1.1 Postgersql
```
Let's start SQL Shell (psql). The program will prompt you to enter the name    
of the server, database, port and user. You can click/skip these items as they  
will use the default values   
(for server - localhost, for database - postgres, for port - 5432,  
as user - postres superuser). 
Next, you will need to enter a password for the user   
(by default, the postgres user): 123456 (in my case)  
```
![Screenshot](readme/psql.JPG)   

`postgres=# create database cargo;`  
  **database list**  
`select datname from pg_database;` 
pg_dump dbname > outfile 

**`Edit  env. file`**    
```
DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=cargo
DB_USERNAME=postgres
DB_PASSWORD=123456
```
##### 1.2 MySQL

`mysql -u root -p`  
`create database cargo; db_name;`  
`drop database db_name;`   
`show databases;`  
`use db_name;`  
`show tables;`   
`drop table table_name;`  
`exit`  

**`Edit  env. file`**   
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=roles_permission
DB_USERNAME=root
DB_PASSWORD=123456
```
##### 1.3 Migration

`php artisan migrate`  

##### 2. Create Item Model Controller Table & route

`php artisan make:controller ItemsController --resource`  
`php artisan make:model Items -m`

app/Providers/AppServiceProvider.php
```
use Illuminate\Support\Facades\Schema;
 public function boot()
    {
        Schema::defaultStringLength(191);
    }
```
items table
```
Schema::create('items', function (Blueprint $table) {
    $table->id();
    $table->string('text');
    $table->string('body');
    $table->timestamps();
});
```
`php artisan migrate`
