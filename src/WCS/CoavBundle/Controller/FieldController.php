<?php

namespace WCS\CoavBundle\Controller;

use WCS\CoavBundle\Entity\Field;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Field controller.
 *
 * @Route("field")
 */
class FieldController extends Controller
{
    /**
     * Lists all field entities.
     *
     * @Route("/", name="field_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fields = $em->getRepository('WCSCoavBundle:Field')->findAll();

        return $this->render('field/index.html.twig', array(
            'fields' => $fields,
        ));
    }

    /**
     * Finds and displays a field entity.
     *
     * @Route("/{id}", name="field_show")
     * @Method("GET")
     */
    public function showAction(Field $field)
    {

        return $this->render('field/show.html.twig', array(
            'field' => $field,
        ));
    }
}
