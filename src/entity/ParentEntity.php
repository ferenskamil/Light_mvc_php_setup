<?php

namespace App\Entity;

use App\Model\Database;

class ParentEntity
{
    private $db;

    public function __construct() {

            $this->db = Database::getInstance()->getConnection();
    }
}