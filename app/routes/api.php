<?php 
use mongo\MongoDB;

/**
 * Routing
 */
$app->get('/api/:collection', function ($collection) use ($app) {
  $select = array(
    'limit' =>    (isset($_GET['limit']))   ? $_GET['limit'] : false, 
    'page' =>     (isset($_GET['page']))    ? $_GET['page'] : false,
    'filter' =>   (isset($_GET['filter']))  ? $_GET['filter'] : false,
    'regex' =>    (isset($_GET['regex']))   ? $_GET['regex'] : false,
    'sort' =>     (isset($_GET['sort']))    ? $_GET['sort'] : false
  );

  $data = MongoDB::mongoList(
    MONGO_HOST, 
    MONGO_DB, 
    $collection,
    $select
  );
  $app->response()->header('Content-Type', 'application/json');
  echo json_encode($data);
});

$app->post(   '/api/:collection',      '_create');
$app->get(    '/api/:collection/:id',  '_read');
$app->put(    '/api/:collection/:id',  '_update');
$app->delete( '/api/:collection/:id',  '_delete');

// @todo: add count collection command mongo/commands.php

// List

function _list($collection, $app){
  
  $select = array(
    'limit' =>    (isset($_GET['limit']))   ? $_GET['limit'] : false, 
    'page' =>     (isset($_GET['page']))    ? $_GET['page'] : false,
    'filter' =>   (isset($_GET['filter']))  ? $_GET['filter'] : false,
    'regex' =>    (isset($_GET['regex']))   ? $_GET['regex'] : false,
    'sort' =>     (isset($_GET['sort']))    ? $_GET['sort'] : false
  );

  $data = MongoDB::mongoList(
    MONGO_HOST, 
    MONGO_DB, 
    $collection,
    $select
  );
  $app->response()->header('Content-Type', 'application/json');
  echo json_encode($data);

}

// Create

function _create($collection){

  $document = json_decode(Slim::getInstance()->request()->getBody(), true);

  $data = MongoDB::mongoCreate(
    MONGO_HOST, 
    MONGO_DB, 
    $collection, 
    $document
  ); 

  $app->response()->header('Content-Type', 'application/json');
  echo json_encode($data);
  
}

// Read

function _read($collection, $id){

  $data = MongoDB::mongoRead(
    MONGO_HOST,
    MONGO_DB,
    $collection,
    $id
  );
  $app->response()->header('Content-Type', 'application/json');
  echo json_encode($data);

}

// Update 

function _update($collection, $id){

  $document = json_decode(Slim::getInstance()->request()->getBody(), true);

  $data = MongoDB::mongoUpdate(
    MONGO_HOST, 
    MONGO_DB, 
    $collection, 
    $id,
    $document
  ); 
  $app->response()->header('Content-Type', 'application/json');
  echo json_encode($data);
  
}

// Delete

function _delete($collection, $id){

  $data = MongoDB::mongoDelete(
    MONGO_HOST, 
    MONGO_DB, 
    $collection, 
    $id
  ); 
  $app->response()->header('Content-Type', 'application/json');
  echo json_encode($data);

}