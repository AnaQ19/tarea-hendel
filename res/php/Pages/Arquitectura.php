<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;

/**
 * 
 */
class  Arquitectura extends Page {

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL) {
        parent::__construct($Extended, "Ana","pages/Arquitectura.twig");
    }
      
    public function initVars() {
        $this->setVar('page.title', 'Pagina de Arquitectura');
       
    }

}
