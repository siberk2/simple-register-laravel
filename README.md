How to clone and use repo:

    1. use command: git clone -b master --single-branch https://github.com/siberk2/simple-register-laravel
    2. in the cloned repo folder run the following commands after each other:

        composer install
        cp .env.example .env(copy .env.example .env if you are in windows)
        php artisan key:generate
    
    3. run your web server and create a new database called 'login' the dbms im using is myql(DISCLAIMER: i Accidentally named the database login instead of register and the controllers and stuff because it was night)

    4. edit the .env file to match the db requirements like the port, the db name, and the dbms or the port that the db is using

    5. run the command php artisan migrate

    6. you should be able to run your program with php artisan serve 