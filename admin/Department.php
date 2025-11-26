<?php

class Department
{
    private function getPDO()
    {
        try {
            $pdo = new PDO("mysql:dbname=ems_db;host=localhost",'root','myatthinzar1259');
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

    public function getDepartmentById($id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM departments WHERE id = :id ");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
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

    public function updateDepartment($id, $name, $status, $leader_id){
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("UPDATE departments 
        SET name = :name,
            status = :status,
            leader_id = :leader_id
        WHERE id = :id ");
        return $stmt->execute([
        'name'      => $name,
        'status'    => $status,
        'leader_id' => $leader_id,
        'id'        => $id
        ]);
    }

    public function deleteDepartment($id){
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("DELETE FROM departments WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
