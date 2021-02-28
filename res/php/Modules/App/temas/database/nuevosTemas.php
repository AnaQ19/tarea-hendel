<?php

namespace ODA\Modules\App\temas\Database;
use ODA\Modules\App\temas\temasEntry;
trait nuevoTema {
    public abstract function Extended();
    public function nuevoTema(String $nombre)  {
        $db = $this->Extended()->Database();

        $stmt = $db->prepare("INSERT INTO temas (nombre_tema) VALUES(?)");
        $stmt->bind_param('is', $nombre);
        $stmt->execute();

        if ($stmt->errno) {
            return new TemasEntry();
        } else {
            $entry = new TemasEntry();
            $entry
                    ->set->Nombre_tema($nombre);
                    

            return $entry;
        }

    }
}