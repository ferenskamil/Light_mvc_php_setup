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


        $content = json_encode($allUsers, JSON_FORCE_OBJECT);

        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: *");

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
        // header('Content-Type: text/plain');
        // header("Accept-Charset: utf-8");
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/x-www-form-urlencoded");

        $user = new User();
        $user->setUser($username, $password);

        // $content = $this->renderHtml('pages/apis.php');
        return new Response("You're pretty");

    }
    public function insertNewUserPost($data) : Response
    {
        // header('Content-Type: text/plain');
        // header("Accept-Charset: utf-8");
        header("Access-Control-Allow-Origin: *");
        // header("Content-Type: application/x-www-form-urlencoded");
        header("Content-Type: application/json");

        $username = $data['username'] ?? 'test';
        $password = $data['password'] ?? 'test';

        $user = new User();
        $user->setUser($username, $password);

        // $content = $this->renderHtml('pages/apis.php');
        return new Response("You are pretty");

    }
}