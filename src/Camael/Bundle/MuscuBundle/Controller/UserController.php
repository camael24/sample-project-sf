<?php

namespace Camael\Bundle\MuscuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Camael\Bundle\MuscuBundle\Entity\User;
use Camael\Bundle\MuscuBundle\Form\UserType;

class UserController extends Controller
{
	/**
	 * @Template()
	 */
    public function indexAction()
    {    

        $em         = $this->getDoctrine()->getManager();
        $entities   = $em->getRepository('CamaelMuscuBundle:User')->findAll();

        return ['entities' => $entities];
    }

    /**
     * @Template()
     */
    public function showAction($id)
    {
        $em         = $this->getDoctrine()->getManager();
        $entities   = $em->getRepository('CamaelMuscuBundle:User')->find($id);

        return ['e' => $entities];
    }

    /**
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CamaelMuscuBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        $editForm = $this->createEditForm($entity);

        $editForm->remove('registerTime');
        $editForm->remove('connectTime');
        return array(
            'entity'      => $entity,
            'form'   => $editForm->createView()
        );
    }

    /**
    * Creates a form to edit a Client entity.
    *
    * @param Client $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_edit', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('cpassword', 'password', ['label' => 'Confirm password']);
        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * @Template()
     */
    public function newAction(Request $request)
    {

        $entity = new User();
        $form = $this->createCreateForm($entity);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $password   = $form->get('password')->getData();
            $cpassword  = $form->get('cpassword')->getData();
            $em         = $this->getDoctrine()->getManager();

            $entity->setRegisterTime(time());
            $entity->setConnectTime(time());

            if($password === $cpassword) {
                $request->getSession()->getFlashBag()->set('success', 'Register is an success');
            }

            // $em->persist($entity);
            // $em->flush();
            
            return $this->redirect($this->generateUrl('user_show', array('id' => 1)));
        }

        // Remove only on view
        $form->remove('registerTime');
        $form->remove('connectTime');

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Client entity.
     *
     * @param Client $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_create'),
            'method' => 'POST',
        ));
        $form->add('cpassword', 'password', ['label' => 'Confirm password']);
        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
}
