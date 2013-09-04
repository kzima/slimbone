<?php
/* frontend */
/* the template is set to fronted as a default config in Slim instantiation in index.php */
$app->get('/', function () use ($app, $config) {
	$app->render('index.html', array(
		'config' => $config
	));
})->name('home');