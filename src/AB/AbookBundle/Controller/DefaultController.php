<?php

namespace AB\AbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AB\AbookBundle\Entity\Contacts;
use AB\AbookBundle\Form\ContactForm;


class DefaultController extends Controller {

    private $message = "";
    
    public function indexAction() {
        return $this->render(
            'AbookBundle:Default:index.html.twig'
        );
    }

    public function listAction() {

        $contact = $this->getDoctrine()
                ->getRepository("AbookBundle:Contacts")
                ->findAll();

        if (is_null($contact)) {
            throw $this->createNotFoundException("Error: not found.");
        }

        return $this->render(
            'AbookBundle:Default:list.html.twig', array('contact' => $contact)
        );
    }

    public function addAction(Request $request) {

        $form = $this->createForm(new ContactForm(), array());
        
        if($request->getMethod() === 'POST'){
            
            $form->handleRequest($request);

            if($form->isValid()){

                $contact = $form->getData();        
                $em = $this->getDoctrine()->getManager()  ; 
                $em->persist($contact->getContact);
                $em->flush();
                
                $this->message = "Is inserted: {$contact->getIdContact()}";
            }
            else {
                $this->message = "There are errors.";
            }
        }
        
        return $this->render(
            'AbookBundle:Default:add.html.twig', 
            array(
                "message" => $this->message,
                "form" => $form->createView()
            )
        );
    }
    
    public function add2Action(Request $request) {

        if ($request->isMethod("post")) {

            if ($request->get("fname") == '' ||
                    $request->get("lname") == '' ||
                    $request->get("addr") == '') {

                $message = "No se han rellenado campos necesarios.";
            } else {

                $contact = new Contacts();
                $contact->setFirstName($request->get("fname"));
                $contact->setLastName($request->get("lname"));
                $contact->setAddress($request->get("addr"));

                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();

                $message = "Se ha creado: {$contact->getIdContact()}";
            }
        } else {

            $message = "";
        }

        return $this->render(
            'AbookBundle:Default:add.html.twig', array("message" => $message)
        );
    }
    
    public function updateAction(Request $request){
        echo "<pre>";
        die(var_dump($request));
         if ($request->isMethod("post")) {

            if ($request->get("fname") == '' ||
                    $request->get("lname") == '' ||
                    $request->get("addr") == '') {

                $message = "No se han rellenado campos necesarios.";
            } else {

                $contact = new Contacts();
                $contact->setFirstName($request->get("fname"));
                $contact->setLastName($request->get("lname"));
                $contact->setAddress($request->get("addr"));

                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();

                $message = "Se ha creado: {$contact->getIdContact()}";
            }
        } else {
            $message = new \stdClass();
            $message->idContact=1;
            $message->firstName = "Tony";
            $message->lastName = "Cardozo";
            $message->idContact = "Pepa 111";
        }

        return $this->render(
            'AbookBundle:Default:update.html.twig', array("message" => $message)
        );
        
    }

}
