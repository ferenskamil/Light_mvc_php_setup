<?php

namespace App\Entity;

use App\Model\Database;

class ParentEntity
{
    protected $db;

    public function __construct() {

            $this->db = Database::getInstance()->getConnection();
    }
}