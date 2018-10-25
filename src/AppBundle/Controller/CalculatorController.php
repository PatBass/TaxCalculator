<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sas;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @return Response
     *
     * @param Request $request
     */
    public function calculatorAction(Request $request)
    {
        $sas = new Sas();

        $caSas = $sas->getTaxValue(200000);

        $autoEntreprise = new Sas();

        $caAutoEntreprise = $autoEntreprise->getTaxValue(400000);

        return $this->render('calculator/index.html.twig', array(
            'ca_sas' => $caSas,
            'ca_auto_entreprise' => $caAutoEntreprise
        ));
    }
}
