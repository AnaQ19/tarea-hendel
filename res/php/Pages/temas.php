<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;
use ODA\Modules\App;


/**
 * 
 */
class  Tema extends Page {
    private $TemasController;


    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL) {
        parent::__construct($Extended, "Temas","pages/Temas.twig");
    }
      
    public function initVars() {
        $db =$this->TemasController;
        $ListaTemas = $db->obtenerListaTemas();
        $this->setVar('page.title', 'Pagina de Ana');
        $this ->setVar('nombre', `Lista de Temas`);
         $this ->setVar('listaTemas', `$ListaTemas`);

    }
public function setUp()
{
  $thisTemasController = new App\temas($this->Extended());
  $this->










}



