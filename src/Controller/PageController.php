<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class PageController extends AbstractController
{
    /**
     * @Route("/pages", name="pages")
     */
    public function pages(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();

        return $this->render('pages/pages.html.twig', ['username' => $user->getUserName()]);
    }

    /**
     * @Route("/page_1", name="page_1")
     */
    public function page1(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PAGE_1');
        $user = $this->getUser();

        return $this->render('pages/page.html.twig', ['username' => $user->getUserName(), 'number' => 1]);
    }

    /**
     * @Route("/page_2", name="page_2")
     */
    public function page2(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PAGE_2');
        $user = $this->getUser();

        return $this->render('pages/page.html.twig', ['username' => $user->getUserName(), 'number' => 2]);
    }

    /**
     * @Route("/page_3", name="page_3")
     */
    public function page3(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PAGE_3');
        $user = $this->getUser();

        return $this->render('pages/page.html.twig', ['username' => $user->getUserName(), 'number' => 3]);
    }
}
