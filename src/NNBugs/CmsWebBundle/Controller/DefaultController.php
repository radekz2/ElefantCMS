<?php

namespace NNBugs\CmsWebBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * @Route("", name="home")
     */
    public function indexAction()
    {
        return $this->render('NNBugsCmsWebBundle:Default:index.html.twig');
    }
}
