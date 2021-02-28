<?php

namespace ODA\Modules\App\temas\Database;

use ODA\Modules\App\temas\temasEntry;
use ODA\Modules\App\temas\TemasEntry as TemasTemasEntry;

trait obtenerListaDeTemas {

    public abstract function Extended();

    public function obtenerListaDeTemas() {
        $db = $this->Extended()->Database();

        $result = [];
       $db_id = null;     
         $db_nombre = null;

       
        
        



        $stmt = $db->prepare("SELECT * FROM temas");
        $stmt->execute();
        $stmt->bind_result( $db_id, $db_nombre);
        $stmt->store_result();

        while ($stmt->fetch()) {
            $entry = new TemasTemasEntry();
            $entry($db_id)
            ->setId_tema  ( $db_id )      
              ->setId_nombre ($db_nombre);


                    ->setValor_n($dbvalor_n)
                    ->setValor_s($dbvalor_s);
            $result[] = $entry;
        }

        $stmt->free_result();
        $stmt->close();

        return $result;
    }

}
