<?php

namespace App\Entity;

use App\Entity\ParentEntity;
use Exception;
use PDO;
use DateTime;
use PDOException;
use SebastianBergmann\Type\VoidType;

class User extends ParentEntity
{
    public function getAllUsers()
    {
        try {
            $getAllUsersQuery = $this->db->prepare("SELECT * FROM users");
            $getAllUsersQuery->execute();
            $result = $getAllUsersQuery->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw new Exception("Get all users failed");
        }

        return $result;
    }
    public function setUser(
        string $username,
        string $password,
        ?DateTime $registeredAt = null
    )
    {
        if (!$registeredAt) {
            $registeredAt = new DateTime();
        }

        $time = $registeredAt->format("Y-m-d H:i:s");

        try {
            $setUserQuery = $this->db->prepare("INSERT INTO users
                    (username, password, registered_at)
                VALUES
                    (:username, :password, :registeredAt);");
            $setUserQuery->bindValue(':username', $username, PDO::PARAM_STR);
            $setUserQuery->bindValue(':password', $password, PDO::PARAM_STR);
            $setUserQuery->bindValue(':registeredAt', $time, PDO::PARAM_STR);
            $setUserQuery->execute();

        } catch (PDOException $e) {
            throw new Exception("Insert user failed");
        }
    }

    public function deleteUser(int $id, string $password) : void
    {
        try {
            $deleteUserQuery = $this->db->prepare("DELETE FROM users
            WHERE
                id = :id AND
                password = :password");
            $deleteUserQuery->bindValue(':id', $id, PDO::PARAM_STR);
            $deleteUserQuery->bindValue(':password', $password, PDO::PARAM_STR);
            $deleteUserQuery->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
            // throw new Exception($e->getMessage());
            // throw new Exception("Delete user failed");
        }
    }

    public function updateUser(int $id, string $password, string $newUsername) : void
    {
        try {
            $updateUserQuery = $this->db->prepare("UPDATE users
                SET username = :newUsername
                WHERE
                    id = :id AND
                    password = :password");
            $updateUserQuery->bindValue(':newUsername', $newUsername, PDO::PARAM_STR);
            $updateUserQuery->bindValue(':id', $id, PDO::PARAM_STR);
            $updateUserQuery->bindValue(':password', $password, PDO::PARAM_STR);
            $updateUserQuery->execute();

        } catch (PDOException $th) {
            throw new Exception("Update user failed");
        }
    }
}