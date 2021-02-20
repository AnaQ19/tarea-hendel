<?php

namespace ODA\Modules\App\temas;

class temasEntry
{
    private $id_tema = 0;
    private $nombre_tema = "No definido";
    

    /**
     * Get the value of id_tema
     */
    public function getIdTema()
    {
        return $this->id_tema;
    }

    /**
     * Set the value of id_tema
     *
     * @return self
     */
    public function setIdTema($id_tema) : self
    {
        $this->id_tema = $id_tema;

        return $this;
    }

    /**
     * Get the value of nombre_tema
     */
    public function getNombreTema()
    {
        return $this->nombre_tema;
    }

    /**
     * Set the value of nombre_tema
     *
     * @return self
     */
    public function setNombreTema($nombre_tema) : self
    {
        $this->nombre_tema = $nombre_tema;

        return $this;
    }
}
