<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;
use ODA\Modules\App\temas;

/**
 * 
 */
class nuevostemas extends Page
{
    private $controladortema;

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended, "Home", 'pages/nuevostemas.twig');
    }

    public function initVars()
    {
        $this->setVar('page.title', 'Pagina de inicio');
    }

    public function CheckPost()
    {
        $nombre_tema = $this->getPost('nombre_tema');

        $control = $this->controladortema;
        $control->nuevostemas($nombre_tema);
    }

    public function setUp()
    {
        $this->controladortema = new nuevostemas($this->Extended());
    }
}
