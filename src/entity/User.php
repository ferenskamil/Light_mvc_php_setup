<?php

namespace App\Entity;

use App\Entity\ParentEntity;
use DateTime;

class User extends ParentEntity
{
    public function getUser(){}
    public function setUser(
        ?string $username = null,
        ?string $password = null,
        ?DateTime $registeredAt = null
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