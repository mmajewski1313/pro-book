<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }


    /**
     * Aron Zielinski
     */

	/**
	 * @Route("/ontheroad.html", name="ontheroad")
	 */
	public function ontheroadAction()
	{
	    return $this->render('default/ontheroad.html.twig');
	}

    /**
     * Krzysztof Zolnierz
     */
        
        /**
	 * @Route("/dzikieserce.html", name="dzikieserce")
	 */
	public function dzikieserceAction()
	{
	    return $this->render('default/dzikieserce.html.twig');
	}

    /**
     * Pawel Krzos
     */


    /**
     * Krzysztof Szulc
     */

    /**
     * Michal Majewski
     */
}