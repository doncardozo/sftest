<?php

namespace AB\AbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AB\AbookBundle\Entity\Contacts;
use AB\AbookBundle\Form\ContactsType;

class ContactsController extends Controller {

    private $message = "";

    public function addAction(Request $request) {

        $options = array("method"=>"post");
        
        $form = $this->createForm(new ContactsType(), new Contacts(), $options);

        if ($request->getMethod() === 'POST') {

            $form->handleRequest($request);

            if ($form->isValid()) {

                $contact = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact->getContact);
                $em->flush();

                $this->message = "Is inserted: {$contact->getIdContact()}";
            } else {
                $this->message = "There are errors.";
            }
        }

        return $this->render(
                'AbookBundle:Contacts:add.html.twig', 
                array("message" => $this->message, "form" => $form->createView())
        );
    }

    public function editAction() {
        
    }

    public function listAction() {

        $contact = $this->getDoctrine()
                ->getRepository("AbookBundle:Contacts")
                ->findAll();

        if (is_null($contact)) {
            throw $this->createNotFoundException("Error: not found.");
        }

        return $this->render(
                'AbookBundle:Contacts:list.html.twig', 
                array('contact' => $contact)
        );
    }

}
