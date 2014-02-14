<?php

namespace AB\AbookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ContactsType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $attr = array("attr" => array("class" => "form-control"));

        $builder
                ->add('firstName', 'text', $attr)
                ->add('lastName', 'text', $attr)
                ->add('address', 'text', $attr)                
        ;

        # Category dropdown
        $cat = array(
            'class' => 'AbookBundle:Categories',
            'property' => 'name',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder("c");
            }
        );
                
        $cat = array_merge($cat, $attr);
        
        $builder->add('category', 'entity', $cat);
        
        # Phone
        $pho = array(
            'class' => 'AbookBundle:ContactsPhones',
            'property' => 'name',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder("c");
            }
        );
                
        $pho = array_merge($pho, $attr);
        
        $builder->add('phone', 'entity', $pho);
                
                
        $attr = array_merge($attr, array("required"=>""));
        
        $builder->add('active', 'checkbox', $attr);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AB\AbookBundle\Entity\Contacts'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ab_abookbundle_contacts';
    }

}
