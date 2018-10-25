<?php
/**
 * Created by IntelliJ IDEA.
 * User: mac
 * Date: 26/10/2018
 * Time: 00:03
 */

namespace AppBundle\Service;


class TurnoverProvider
{
    public function getTurnover()
    {
        $chiffreAffaires = array(
            'ca_sas' => 250000,
            'ca_auto_entreprise' => 450000
        );

        return $chiffreAffaires;
    }
}