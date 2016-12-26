<?php

namespace AppBundle\Controller;

use AppBundle\Entity\City;
use AppBundle\Entity\Division;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
//        $this->getDoctrine()->getManager()->persist(new City("Paris"));
//        $this->getDoctrine()->getManager()->persist(new Division("France"));
//        $this->getDoctrine()->getManager()->persist(new Division("California"));
//        $this->getDoctrine()->getManager()->persist(new City("San Francisco"));
//
//        $this->getDoctrine()->getManager()->flush();

        $divisions = $this->getDoctrine()->getRepository(Division::class)->findAll();
        dump($divisions);

        $cities = $this->getDoctrine()->getRepository(City::class)->findAll();
        dump($cities);

        return new JsonResponse([
            'division' => count($divisions),
            'cities' => count($cities),
        ]);
    }
}
