<?php

namespace App\Controller;

use App\Entity\User;
use DateTime;
use MvcPurePhp\Framework\Http\Response;
use MvcPurePhp\Framework\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index() : Response
    {
        /** test - start */
        /** @var \App\Entity\User $user */
        $user = new User();
        $user->setUser("Agnieszka", "Bociek", new DateTime());
        /** test - end */

        $content = $this->renderHtml('pages/testPage.php');
        return new Response($content);
    }

    public function page() : Response
    {
        $content = '<h1>Welcome to my page</h1>';

        return new Response($content);
    }

    public function customPage(int $num) : Response
    {
        $content = "<h1>That's the result: {$num}</h1>";

        return new Response($content);
    }
}
