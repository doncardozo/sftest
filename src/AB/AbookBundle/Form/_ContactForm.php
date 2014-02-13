<?php

namespace AB\AbookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $optContact = array(            
            "attr" => array(
                "class" => "form-control"
            )
        );

        $builder->add("first_name", "text", $optContact)
                ->add("last_name", "text", $optContact)
                ->add("address", "text", $optContact)
                ->add("Add", "submit", array("attr"=>array("class"=>"btn btn-primary","style"=>"margin-top: 15px;")));        
        
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'AB\AbookBundle\Entity\Contacts',
        );
    }

    public function getName() {
        return "contact";
    }

}
