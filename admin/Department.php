<?php

class Department
{
    private function getPDO()
    {
        try {
            $pdo = new PDO("mysql:dbname=ems_db;host=localhost",'root','EBP!23ebp');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (PDOException $e){
            die ($e->getMessage());
        }
    }

    public function getAllDepartments()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM departments");
        $departments = $stmt->fetchAll();
        return $departments;
    }
}
