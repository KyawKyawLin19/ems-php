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
        $stmt = $pdo->prepare("SELECT `email`,`password` FROM employees 
                               WHERE email = :email AND password = :password ");
        $stmt->execute([':email' => $email,
                        ':password' => $password]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        //die(var_dump($password == $result->password));
        if($result){
            //die(var_dump($password));
            if ($email == $result->email && $password == $result->password){
                echo "<script>alert(successfully login);window.location.href='index.html';</script>";
            }
        }
        //die(var_dump($result));
    }
}
?>