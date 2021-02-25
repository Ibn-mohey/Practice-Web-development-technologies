## [Source](https://laracasts.com/series/laravel-6-from-scratch)

### create a new project 

in cmd type `laravel new name`

### create server
in cmd of the project after created run `php artisan serve --port=8080`

### go to the project folder 
click `shift+right click`
open power shell
type `code .`
add new terminal 
type `php artisan serve --port=8080` to load the server and open it in any browser [`127.0.0.1:8080`](http://127.0.0.1:8080)

### why blade 
1. we can use `{{$variable}}` which is more sequre than normal var

### make migration for the Tables 
`php artisan make:migration create_posts_table`

### start migration
`php artisan migrate`

### to rollback
`php artisan migrate:rollback`

### timestamps for created and midofied 
timstamp without s for others