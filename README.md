# CakePHP-3 Users Blog Test Application

Applies all CRUD functionality on users table

## Using the image and running containers

1. Clone the [Cakeblog App](https://github.com/RonieGSS/cakeblog) from the repository.
2. On your terminal change directory to the root folder.
3. Run the ``` docker-compose up --build -d``` command (First time run only).
4. Run the ``` docker-compose up -d``` simply on the next run.
5. You can open and use the cakephp app and phpmyadmin.

## PHPMYADMIN Credentials

1. URL => localhost:8080
2. server => phpmyadmin_mysql
3. user => root
4. password => test
5. Import the sample cakeblog.sql from dump/ folder

## Web Application Credentials

1. URL => localhost:4000
2. email => tan@gmail.com
3. password => tan

## Cakephp Datasources Configuration

The Datasources default secion of app.php inside your config folder
should look like this:

```
'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => env('MYSQL_URL', null),
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
            'username' => env('MYSQL_USERNAME','root'),
            'password' => env('MYSQL_PASSWORD','test'),
            'database' => 'cakeblog',
            /*
             * You do not need to set this flag to use full utf-8 encoding (internal default since CakePHP 3.6).
             */
            //'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,

            /**
             * Set identifier quoting to true if you are using reserved words or
             * special characters in your table or column names. Enabling this
             * setting will result in queries built using the Query Builder having
             * identifiers quoted when creating SQL. It should be noted that this
             * decreases performance because each query needs to be traversed and
             * manipulated before being executed.
             */
            'quoteIdentifiers' => false,

            /**
             * During development, if using MySQL < 5.6, uncommenting the
             * following line could boost the speed at which schema metadata is
             * fetched from the database. It can also be set directly with the
             * mysql configuration directive 'innodb_stats_on_metadata = 0'
             * which is the recommended value in production environments
             */
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],

            'url' => env('DATABASE_URL', null),
        ],

```

## Enjoy!

