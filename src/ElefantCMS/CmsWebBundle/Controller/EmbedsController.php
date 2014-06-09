<?php

namespace ElefantCMS\CmsWebBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class EmbedsController extends Controller
{
    public function repoNavAction()
    {
        return $this->render('ElefantCMSCmsWebBundle:Embeds:repository_nav_bar.html.twig', array("Content" => $note->GetContent()));
    }
}
