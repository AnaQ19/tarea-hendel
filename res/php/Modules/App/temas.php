<?php

namespace ODA\Modules\App; // package de java

// Importamos libreria PHP
use ODA\Modules\App\temas\Database;
use ODA\Modules\Extended;
use ODA\Modules\Extended\ExtendedExtended;

class temas extends ExtendedExtended
{

    use Database\nuevostemas;
    
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended);
    }
}
