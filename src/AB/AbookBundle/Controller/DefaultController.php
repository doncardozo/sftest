<?php

namespace AB\AbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AB\AbookBundle\Entity\Contacts;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render(
                        'AbookBundle:Default:index.html.twig', array(
                            'title' => 'AB - Address Book',
                            'greet' => "Buenas...",
                            'datos' => array(
                                'Oscar', 'Antonio', 'Cardozo'
                            )
                        )
        );
    }

    public function list2Action() {

        $contact = $this->getDoctrine()
                ->getRepository("AbookBundle:Contacts")
                ->findAll();

        if (is_null($contact)) {
            throw $this->createNotFoundException("Error: not found.");
        }

        return $this->render(
                        'AbookBundle:Default:list2.html.twig', array('contact' => $contact)
        );
    }

    public function listAction() {

        $em = $this->get('doctrine')->getManager();
        $stmt = $em
            ->getConnection()
            ->prepare('call test();');
        
        $stmt->execute();
        $results = $stmt->fetchAll();
        
        return $this->render(
            'AbookBundle:Default:list.html.twig', 
            array(
                'title' => 'Contact list',
                'contact' => $results
            )
        );
    }

    public function addAction(Request $request) {

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

}
