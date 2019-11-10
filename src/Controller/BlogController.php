<?php
namespace App\Controller;

use App\Service\GreetingService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
  private $greetingMessage;

  public function __construct(GreetingService $greeting)
  {
    $this->greetingMessage = $greeting;
  }
/**
 * @Route("/blog/{name}", name="rt_blog")
 */
  public function index(Request $request)
  {
    return $this->render("base.html.twig", [
      "message" => $this->greetingMessage->greet($request->get("name")),
    ]);
  }
}