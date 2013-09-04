<?php
/* admin panel */
$app->get('/admin/', function () use ($app, $config) {
	// we need to override the default template
	$app->config('templates.path', './'.$config['admin']['folder_name'].'/');
  	$app->render('index.html', array(
  		'config' => $config
  	));
});