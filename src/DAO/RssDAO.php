<?php

namespace Watson\DAO;

use Watson\Domain\Rss;

class RssDAO extends DAO
{
    /**
     * Renvoie la liste de tous les liens, triés par ordre chronologique
     *
     * @return array
     */
    public function findAll() {
        $sql = "
            SELECT * 
            FROM tl_liens 
            ORDER BY lien_id DESC
        ";
        $result = $this->getDb()->fetchAll($sql);

        // Convertir le résultat de la requête en un tableau d'objets
        $_links = array();
        foreach ($result as $row) {
            $linkId          = $row['lien_id'];
            $_links[$linkId] = $this->buildDomainObject($row);
        }
        return $_links;
    }

    /**
    * Create the text file for the rss feed
    * 
    * @return string
    */
    public function getRSS(){
        $rss = '';

        return $rss;
    }

    protected function buildDomainObject($row) {
        $rss = new Rss();
        $rss->setTitle($row['lien_titre']);
        $rss->setUrl($row['lien_url']);
        $rss->setDesc($row['lien_desc']);

        return $rss;
    }
}