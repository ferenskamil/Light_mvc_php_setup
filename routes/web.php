<?php

use App\Controller\HomeController;
use App\Controller\ApiController;

return [
    /** HomeController */
    ['GET', '/', [HomeController::class, 'index']],
    ['GET', '/page', [HomeController::class, 'page']],
    ['GET', '/page/{num: \d+}', [HomeController::class, 'customPage']],

    /** ApiController */
    ['GET', '/api', [ApiController::class, 'allApis']],
    ['GET', '/api/users', [ApiController::class, 'getAllUsersJson']],
    ['GET', '/api/users/delete/{id: \d+}/{password: [a-zA-Z0-9]+}', [ApiController::class, 'deleteUser']],
    ['GET', '/api/users/update/{id: \d+}/{password: [a-zA-Z0-9]+}/{newUsername: [a-zA-Z0-9]+}', [ApiController::class, 'updateUser']],
    ['GET', '/api/users/insert/{username: [a-zA-Z0-9]+}/{password: [a-zA-Z0-9]+}', [ApiController::class, 'insertNewUser']],
];