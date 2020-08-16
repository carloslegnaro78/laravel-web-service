<?php


$this->get('categories','Api\CateogoryController@index');
$this->post('categories','Api\CateogoryController@store');
$this->put('categories/{id}','Api\CateogoryController@update');


