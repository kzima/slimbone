<?php

//globals
$baseUrl = $app->request()->getRootUri();
$config = array (
    'defaultLocality' => 'en_UK.UTF-8',
    'baseUrl' => $baseUrl,
    'mode' => $app->getMode(),
    'app' => array(
        'folder_name' => 'slimbone_app',
        'assets' => $baseUrl.'/slimbone_app'
    ),
    'admin' => array (
        'folder_name' => 'slimbone_admin',
        'assets' => $baseUrl.'/slimbone_admin'
    )
);

//slim configuration
// Only invoked if mode is "production"
$app->configureMode('production', function () use ($app) {
    array(
        'log.enable' => true,
        'debug' => false,
    );
});

// Only invoked if mode is "development"
$app->configureMode('development', function () use ($app) {
    array(
    	'debug'      => true,
        'log.enable' => false,
        'log.level'  => \Slim\Log::WARN,
        'debug' => true,
    );
});

//default template set to app
$app->config('templates.path', './'.$config['app']['folder_name'].'/');


//environment specific settings
switch ($app->getMode()) {
    case 'development':
            // DB config
            define('MONGO_HOST', 'localhost:27017');
            define('MONGO_DB', 'test');
        break;
    
    default://default to production
            // DB config
            define('MONGO_HOST', 'localhost:27017');
            define('MONGO_DB', 'test');
        break;
};