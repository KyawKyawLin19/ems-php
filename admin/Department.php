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

    public function addDepartment($data)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("
            INSERT INTO departments (name, code, icon, description, status, leader_id, created_at, updated_at)
            VALUES (:name, :code, :icon, :description, :status, :leader_id, :created_at, :updated_at)
        ");

        return $stmt->execute([
            ':name'        => $data['name'],
            ':code'        => $data['code'],
            ':icon'        => $data['icon'],
            ':description' => $data['description'],
            ':status'      => $data['status'],
            ':leader_id'   => $data['leader_id'],
            ':created_at'  => date('Y-m-d H:i:s'),
            ':updated_at'  => date('Y-m-d H:i:s')
        ]);
    }
}
