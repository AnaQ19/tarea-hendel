<?php

namespace ODA\Modules\App\temas\Database;

use ODA\Modules\App\temas\temasEntry;

trait nuevostemas
{

    public abstract function Extended();
 
    public function nuevostemas(string $nombre): temasEntry
    {
        $db = $this->Extended()->Database();

        $stmt = $db->prepare("INSERT INTO temas (nombre_tema) VALUES(?)");
        $stmt->bind_param('s', $nombre);
        $stmt->execute();

        if ($stmt->errno) {
            return new temasEntry();
        } else {
            $entry = new temasEntry();
            $entry
                ->setNombreTema($nombre);

            return $entry;
        }
    }
}
