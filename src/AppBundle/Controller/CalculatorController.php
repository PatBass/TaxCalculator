<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AutoEntreprise;
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
        $turnoverProvider = $this->get('turnover_provider');
        $turnoverSas = ($turnoverProvider->getTurnover())['ca_sas'];
        $turnoverAutoEntreprise = ($turnoverProvider->getTurnover())['ca_auto_entreprise'];

        $sas = new Sas();

        $taxSas = $sas->getTaxValue($turnoverSas);

        $autoEntreprise = new AutoEntreprise();

        $taxAutoEntreprise = $autoEntreprise->getTaxValue($turnoverAutoEntreprise);

        return $this->render('calculator/index.html.twig', array(
            'tax_sas' => $taxSas,
            'tax_auto_entreprise' => $taxAutoEntreprise
        ));
    }
}
