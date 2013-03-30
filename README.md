CakePHP starter
=======

Voici un starter pour cakePHP. Il faudra quand même changer les fichiers suivants :

    /app/Config/database.php

qui ressemble à ça : 

    class DATABASE_CONFIG {
        public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'root',
        'password' => 'Password',
        'database' => 'cakeTest',
        'prefix' => '',
        'encoding' => 'utf8',
      );
    }

----

Ce starter inclus :
* Le plugin [DebugKit](https://github.com/cakephp/debug_kit)
* Le Helper pour [TwitterBootstrap](https://github.com/loadsys/twitter-bootstrap-helper)

----
Versions incluses :
* [Jquery](http://jquery.com/)
* [Jquery UI](http://jqueryui.com/)
* [Bootstrap 2.3.1](http://twitter.github.com/bootstrap/)
