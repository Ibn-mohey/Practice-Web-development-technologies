## [Source](https://laracasts.com/series/laravel-6-from-scratch)

### create a new project 

in CMD type `laravel new name`

### create server
in CMD of the project after created run `PHP artisan serve --port=8080`

### go to the project folder 
click `shift+right click`
open power shell
type `code .`
add new terminal 
type `PHP artisan serve --port=8080` to load the server and open it in any browser [`127.0.0.1:8080`](http://127.0.0.1:8080)

### why blade 
1. we can use `{{$variable}}` which is more secure than normal vary

### make migration for the Tables 
`php artisan make:migration create_posts_table`

### start migration
`php artisan migrate`

### to rollback
`php artisan migrate:rollback`

### timestamps for created and modified 
timestamp without s for others

### create multiple files with commands 
`php artisan make::model Project -mc`
* -a, --all             Generate a migration, seeder, factory, and resource controller for the model
* -c, --controller      Create a new controller for the model
* -f, --factory         Create a new factory for the model
* --force           Create the class even if the model already exists
* -m, --migration       Create a new migration file for the model
* -s, --seed            Create a new seeder file for the model
* -p, --pivot           Indicates if the generated model should be a custom intermediate table model
* -r, --resource        Indicates if the generated controller should be a resource controller
* --API             Indicates if the generated controller should be an API controller
* -h, --help            Display help for the given command. When no command is given display help for the list command
* -q, --quiet           Do not output any message
* -V, --version         Display this application version
* --ANSI            Force ANSI output
* --no-ANSI         Disable ANSI output
* -n, --no-interaction  Do not ask any interactive question
* --ENV[=ENV]       The environment the command should run under
* -V|VV|VVV --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

### play ground
`php artisan tinker`
I can play with the database here, and fetch, and add more things to it 
`App\Models\Assignment::first` to fetch 

### site Template
assets will go in 

public 


### More with database 
again `php artisan tinker` to play with the database 
and more we can call it throw 
`all` or `paginate(2)` or `::take(2)->get();`

### The Seven Restful Controller Actions
1. index > list
2. show > specific one 
3. create > new one 
4. store >
5. edit
6. update
7. destroy

to create all above we can use 
`PHP artisan make:controller ProjectsController -r -m Projects -yes`

* Get / some data
* GET /Create Some Data 
* POST / the new Data
* Get / Edit some Data 
* Put / update
* Delete / some Data
* Post / video / subscription 
* 