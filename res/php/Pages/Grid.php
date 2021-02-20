<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;

/**
 * 
 */
class  Grid extends Page {

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL) {
        parent::__construct($Extended, "Ana","pages/Grid.twig");
    }
      
    public function initVars() {
        $this->setVar('page.title', 'Pagina de Grid');
       
    }

}