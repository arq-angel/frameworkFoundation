<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\config\Paths;

use function App\Config\{registerRoutes, registerMiddleware};

$app = new App(Paths::SOURCE . "app/container-definitions.php");

registerRoutes($app);
registerMiddleware($app);

return $app;
