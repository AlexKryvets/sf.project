<?php


namespace App\Controller;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{

    public function index(EntityManagerInterface $em) {
        $users = $em->getRepository(User::class)->findAll();
        return new Response('asd');
    }
}
