<?php
// Start the session
session_cache_limiter(false);
session_start();

// Composer autoloading (vendor and lib)
require '../app/vendor/autoload.php';

//app/lib/functions - load twig i18n extension
loadTwigi18n ();

// Instantiate and configure Slim
$app = new \Slim\Slim(array(
	'view' => new \Slim\Extras\Views\Twig(),
	)
);

//register parse extensions (like twig) in the app
$app->view()->parserExtensions = array(
    'Twig_Extension_Debug',
    'Twig_Extensions_Extension_I18n'
);

//load environment specific config (slim settings, DB, globals and other)
require '../app/config/config.php';

//app/lib/functions - set locality
setLocality($config['defaultLocality']);

//load routes
require '../app/routes/api.php';
require '../app/routes/admin.php';
require '../app/routes/app.php';
if ($app->getMode() == "development") {
	require '../app/routes/test.php';
}

// route not found 
$app->notFound(function () use ($app) {
	// we need to override the default template
	$app->config('templates.path', './'); 
    $app->render('404.html', array('home'=>$app->urlFor('home'))); //it uses route alias 'home' from app.php route
});

// Run it
$app->run();
