<?php

use App\Controller\HomeController;

return [
    ['GET', '/', [HomeController::class, 'index']],
    ['GET', '/page', [HomeController::class, 'page']],
    ['GET', '/page/{num: \d+}', [HomeController::class, 'customPage']],
];