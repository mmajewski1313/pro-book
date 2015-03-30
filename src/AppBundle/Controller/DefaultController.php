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
	 * @Route("/kamienienaszaniec.html", name="kamienienaszaniec")
	 */
	public function kamienienaszaniecAction()
	{
	    return $this->render('default/kamienienaszaniec.html.twig');
	}
        
    /**
     * Pawel Krzos
     */
        /**
	 * @Route("/snowcrash.html", name="snowcrash")
	 */
	public function snowcrashAction()
	{
	    return $this->render('default/snowcrash.html.twig');
	}
    /**
	 * @Route("/lordrings.html", name="lordrings")
	 */
	public function lordringsAction()
	{
	    return $this->render('default/lordrings.html.twig');
	}

    /**
     * Krzysztof Szulc
     */

	/**
	 * @Route("/magdalena.html", name="magdalena")
	 */
	public function magdalenaAction()
	{
	    return $this->render('default/magdalena.html.twig');
	}
	
	/**
	 * @Route("/mezczyzna.html", name="mezczyzna")
	 */
	public function mezczyznaAction()
	{
	    return $this->render('default/mezczyzna.html.twig');
	}
	
    /**
     * Michal Majewski
     */
 /**
	 * @Route("/urodzenibiegacze.html", name="urodzenibiegacze")
	 */
	public function urodzenibiegaczeAction()
	{
	    return $this->render('default/urodzenibiegacze.html.twig');
	}
/**
	 * @Route("/wojnaopieniadze.html", name="wojnaopieniadze")
	 */
	public function wojnaopieniadzeAction()
	{
	    return $this->render('default/wojnaopieniadze.html.twig');
	}
        
        }