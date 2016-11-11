<?php
    spl_autoload_register(function($classname){require_once str_replace( '\\', DIRECTORY_SEPARATOR, $classname ) . '.php';});

    \FMWork\Configs\Application::initialize();
    \FMWork\Configs\Config::initialize();
    
    \FMWork\Configs\DataBase::initialize([
        'connector' => 'PDO',
        'host'      => 'localhost',
        'user'      => 'root',
        'password'  => '',
        'database'  => 'helpservice'
    ]);
    
    $controller = new \Controllers\ControllerBase();
    
    $controller->action('index');
    
?>