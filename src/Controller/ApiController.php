<?php

namespace App\Controller;
use App\Entity\User;
use MvcPurePhp\Framework\Controller\AbstractController;
use MvcPurePhp\Framework\Http\Response;

class ApiController extends AbstractController
{
    public function allApis() : Response
    {
        $content = $this->renderHtml('pages/apis.php');
        return new Response($content);
    }

    public function getAllUsersJson() : Response
    {
        $user = new User();
        $allUsers = $user->getAllUsers();

        $content = json_encode($allUsers);

        return new Response($content);
    }

    public function deleteUser(int $id, string $password) : Response
    {
        $user = new User();
        $user->deleteUser($id, $password);

        $content = $this->renderHtml('pages/apis.php');
        return new Response($content);
    }

    public function updateUser(int $id, string $password, string $newUsername) : Response
    {
        $user = new User();
        $user->updateUser($id, $password, $newUsername);

        $content = $this->renderHtml('pages/apis.php');
        return new Response($content);
    }

    public function insertNewUser(string $username, string $password) : Response
    {
        $user = new User();
        $user->setUser($username, $password);

        $content = $this->renderHtml('pages/apis.php');
        return new Response($content);

    }
}