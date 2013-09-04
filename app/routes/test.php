<?php
//use test/products or test/prodcut to simulate API
$app->get('/test/products', function () use ($app) {
	$arr = array(
		array (
			'name'=> 'Slim Framework',
			'description'=> 'Slim is a PHP micro framework that helps you quickly write simple yet powerful web applications and APIs.',
			'imgUrl' => 'uploads/img/item-slim.jpg'
		),
		array (
			'name'=> 'Backbone',
			'description'=> 'Backbone.js is a lightweight JavaScript library that adds structure to your client-side code.',
			'imgUrl' => 'uploads/img/item-backbone.jpg'
		),
		array (
			'name'=> 'Mongo DB',
			'description'=> 'MongoDB is an open-source, document-oriented database designed for ease of development and scaling.',
			'imgUrl' => 'uploads/img/item-mongodb.jpg'
		),
	);
	$app->response()->header('Content-Type', 'application/json');
	echo json_encode($arr);
});

$app->get('/test/product', function () use ($app){
	$arr = 
		array (
			'name'=> 'product1',
			'price'=> '9.99'
		);
	$app->response()->header('Content-Type', 'application/json');
	echo json_encode($arr);
});