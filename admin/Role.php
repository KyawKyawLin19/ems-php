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


}
?>