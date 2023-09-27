<?php

/** Tu będą klasy odpowiadające tablicom, ale w uproszczonej formie (ew. do zmiany) */

namespace App\Entity;

use App\Model\Database;
use DateTime;

class User
{
    private $db;

    public function __construct() {

            $this->db = Database::getInstance()->getConnection();
    }
    public function getUser(){}
    public function setUser(
        ?string $username = null,
        ?string $password = null,
        ?DateTime $registeredAt = null
        // ?DateTime $registeredAt = null
    )
    {
        echo "Hello world";

        $time = $registeredAt->format("Y-m-d");

        $setUserQuery = $this->db->prepare("INSERT INTO users
                (username, password, registered_at)
            VALUES
                ('Kamil', 'Ferens', '" . $time . "');");
        $setUserQuery->execute();
    }
}