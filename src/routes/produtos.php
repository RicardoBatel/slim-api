<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;

// Rotas para produtos

//ORM -> Object Relational Mapper (Mapeador de objeto relacional)
//Iluminte -> é o motor da base de dados do Laravel sem o Lravel
//Eloquent ORM
$app->group('/api/v1', function(){

  $this->get('/produtos/lista', function($request, $response){

    $produto = Produto::get();

    return $response->withJson($produto);

  });

});