<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;

/**
 * 
 */
class  carta extends Page {

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL) {
        parent::__construct($Extended, "Ana","pages/carta.twig");
    }
      
    public function initVars() {
        $this->setVar('page.title', 'Pagina de Ana');
        $this ->setVar('nombre', "Ana desde php");
    }

}
