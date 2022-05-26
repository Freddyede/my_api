<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{ Request, JsonResponse };
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/login", name="app_test")
     */
    public function index(Request $request): JsonResponse
    {
        if($request->getMethod() === 'POST' && $request->headers->get('username') == 'patouillardfranck3@gmail.com' && $request->get('password') == 'Franck97'){
            return new JsonResponse([
                'api_key' => 'AGAEGEARGEAFEAEFAFEAFAZEFAE'
            ]);
        }
        else {
            return new JsonResponse("404");
        }
    }

    /**
     * @Route("/users/lists", name="app_users")
     */
    public function getUsers(Request $request){
        if($request->getMethod() === 'GET' && $request->headers->get('Authorization') === 'AGAEGEARGEAFEAEFAFEAFAZEFAE' && $request->get('username') == 'patouillardfranck3@gmail.com' && $request->get('password') == 'Franck97'){
            return new JsonResponse(["Patouillard", "Franck", 24, "Développeur web alternance"]);
        } else {
            return new JsonResponse("403");
        }
    }
}
