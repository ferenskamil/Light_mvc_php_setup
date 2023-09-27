<?php declare(strict_types=1);

namespace Tests\Controller;

use PHPUnit\Framework\TestCase;
use MvcPurePhp\Framework\Http\Response;
use App\Controller\HomeController;

require 'vendor/autoload.php';
class HomeControllerTest extends TestCase
{
    public function testShouldReturnResponseType() : void
    {

        $hc = new HomeController;

        $expectedType = Response::class;

        $indexResultType = $hc->index();
        $pageResultType = $hc->page();
        $customPageResultType = $hc->customPage(5);

        $this->assertInstanceOf(
            expected: $expectedType,
            actual: $indexResultType,
        );
        $this->assertInstanceOf(
            expected: $expectedType,
            actual: $pageResultType,
        );
        $this->assertInstanceOf(
            expected: $expectedType,
            actual: $customPageResultType,
        );

    }
}