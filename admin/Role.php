<?php
class Role
{
    private function getPDO()
    {
        try {
            $pdo = new PDO("mysql:dbname=ems_db;host=localhost",'root','myatthinzar1259');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
    }

    public function getAllRoles()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM roles");
        return $stmt->fetchAll();
    }

    public function addRoles($data){
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("INSERT INTO roles (role_name, description, emoji, base_salary) VALUES (:name, :description, :emoji, :base_salary)");
        return $stmt->execute([
            ':name' => $data['name'],
            ':description' => $data['description'],
            ':emoji' => $data['emoji'],
            ':base_salary' => $data['base_salary'],
        ]);
    }

    public function getRoleNames($id){
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT role_name from roles where id=:id");
        $stmt->execute([':id' => $id]);
        $role_name = $stmt->fetch();
        return $role_name[0];

    }


}
?>