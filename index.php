<?php


declare(strict_types=1);
require_once __DIR__ . '/src/App/Framework/App.php';

use Framework\App;

$app = new App();
$app->run();
return $app;