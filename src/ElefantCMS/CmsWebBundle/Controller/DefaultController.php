<?php

namespace ElefantCMS\CmsWebBundle\Controller;

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
        $note = new \ElefantCMS\Classes\SingleNote("/vagrant/tmp/test-note.nnex");
        $note->ParseSingleNote();
        //
        
        return $this->render('ElefantCMSCmsWebBundle:Default:index.html.twig', array("Content" => $note->GetContent()));
    }
}
