<?php

namespace EmpresaBundle\Controller;

use EmpresaBundle\Entity\Empresa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Empresa API controller.
 *
 * @Route("api/empresa")
 */
class ApiEmpresaController extends Controller
{
    /**
     * Returns all empresa entities as Json.
     *
     * @Route("/", name="empresa_all")
     * @Method("GET")
     */
    public function allAction()
    {
        $em = $this->getDoctrine()->getManager();

        $empresas = $em->getRepository('EmpresaBundle:Empresa')->findAll();

        /*return $this->render('empresa/index.html.twig', array(
            'empresas' => $empresas,
        ));*/
        $serializer = $this->container->get('jms_serializer');
        
        return new Response($serializer->serialize($empresas, 'json'));
    }

}
