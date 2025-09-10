<?php

namespace versions\v1\modulos\productos;

use Flight;

class ProductosController{
    public static function index(): void
    {
        Flight::route('GET /', function(){
            echo 'indexProductos';
        });
        Flight::route('GET /@id', function($id){
            echo $id.' producto';
        });
    }
}