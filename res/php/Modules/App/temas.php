<?php

namespace ODA\Modules\App\Prueba;


// Importamos libreria PHP
use ODA\Modules\App\temas\Database;
use ODA\Modules\Extended;
use ODA\Modules\Extended\ExtendedExtended;

class temas extends ExtendedExtended
{
    use Database\obtenerListaDeTemas;
    

    /**
     * @param Extended $Extended
     */
    
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended);
    }
    public function checkpost()
{    $nombreTema =$this->getPost('nombre_tema');
    $db =$this->temasController;
     $db =$this->nuevoTema;

 }
}
