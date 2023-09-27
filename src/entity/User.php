<?php

/** Tu będą klasy odpowiadające tablicom, ale w uproszczonej formie (ew. do zmiany) */

namespace App\Entity;

use DateTime;

class User
{
    public function getUser(){}
    public function setUser(
        ?string $id = null,
        ?string $username = null,
        ?string $password = null,
        ?DateTime $registeredAt = null
    )
    {
    }
}