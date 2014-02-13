<?php

namespace AB\AbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render(
            'AbookBundle:Default:index.html.twig'
        );
    }

}
