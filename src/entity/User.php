<?php

namespace App\Entity;

use App\Entity\ParentEntity;
use PDO;
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
        $time = $registeredAt->format("Y-m-d H:i:s");

        $setUserQuery = $this->db->prepare("INSERT INTO users
                (username, password, registered_at)
            VALUES
                (:username, :password, :registeredAt);");
        $setUserQuery->bindValue(':username', $username, PDO::PARAM_STR);
        $setUserQuery->bindValue(':password', $password, PDO::PARAM_STR);
        $setUserQuery->bindValue(':registeredAt', $time, PDO::PARAM_STR);
        $setUserQuery->execute();
    }
}