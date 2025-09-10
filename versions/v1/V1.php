<?php
namespace versions\v1;

use Flight;

use  versions\v1\modulos\usuarios\UsersController;
use  versions\v1\modulos\productos\ProductosController;


class   V1{
    /**
     * Register the routes for the version 1 API.
     *
     * @example /v1
     * @example /v1/users
     * @example /v1/productos
     */
    public static function index(){
       Flight::group('/v1', function(){

        Flight::route('GET /', function(){
            echo 'Hello World V1';
        });
        // AGREGANDO MODULOS
        Flight::resource('/users',UsersController::class) ;
        Flight::group('/productos',[ProductosController::class,'index']); 
    });
    }
}