<?php
// app/Models/Student.php

require_once __DIR__ . '/../Core/Database.php';

class Student
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function all()
    {
        $sql = "SELECT * FROM students ORDER BY id DESC";
        return $this->db->query($sql);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($username, $name, $email, $class, $password)
    {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->db->prepare(
            "INSERT INTO students (username, name, email, class, password) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("sssss", $username, $name, $email, $class, $hashed);
        return $stmt->execute();
    }

    public function update($id, $username, $name, $email, $class, $password = null)
    {
        if ($password) {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->db->prepare(
                "UPDATE students SET username=?, name=?, email=?, class=?, password=? WHERE id=?"
            );
            $stmt->bind_param("sssssi", $username, $name, $email, $class, $hashed, $id);
        } else {
            $stmt = $this->db->prepare(
                "UPDATE students SET username=?, name=?, email=?, class=? WHERE id=?"
            );
            $stmt->bind_param("ssssi", $username, $name, $email, $class, $id);
        }

        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
