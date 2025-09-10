<?php

declare(strict_types=1);

use versions\v1\V1;

require_once 'flight/Flight.php';

// REGISTRAMOS DESDE DONDE SE CARGA EL AUTOLOAD
// los namespace deben ser igual que las rutas
Flight::path(__DIR__."/");



Flight::group('/api', function () {

   V1::index();
});




Flight::start();
