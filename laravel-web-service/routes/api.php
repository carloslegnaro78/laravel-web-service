<?php

/*
$this->get('categories','Api\CateogoryController@index');
$this->post('categories','Api\CateogoryController@store');
$this->put('categories/{id}','Api\CateogoryController@update');
$this->delete('categories/{id}','Api\CateogoryController@delete');
*/

$this->apiResource('categories','Api\CateogoryController');


