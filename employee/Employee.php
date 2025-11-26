<?php

Class Employee{
    private function getPDO(){
        try {
            $pdo = new PDO("mysql:dbname=ems_db;host=localhost",'root','myatthinzar1259');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
    }

    public function check_login($email,$password){
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM employees 
                               WHERE email = :email AND password_hash = :password_hash ");
        $stmt->execute([':email' => $email,
                        ':password_hash' => $password]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        
        //die(var_dump($result));

        //die(var_dump($result->email == $email , $result->password == $password));
        if ($result) {
            if ($result->email == $email && $result->password_hash == $password) {
                return $result;
    
            } else {
                return false;
            }
        }
    }
    
    public function getEmployeeById($id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM employees WHERE id = :id ");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
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