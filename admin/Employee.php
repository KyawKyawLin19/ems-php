<?php
class Employee
{
    private function getPDO()
    {
        try {
            $pdo = new PDO("mysql:dbname=ems_db;host=localhost",'root','EBP!23ebp');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
    }

    public function getAllEmployees()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM employees");
        return $stmt->fetchAll();
    }

    public function getEmployeeByRole($id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM employees WHERE role_id = :role_id");
        $stmt->execute(['role_id' => $id]);
        return $stmt->fetchAll();
    }

    public function getEmployeeById($id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM employees WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function addEmployee($data)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("INSERT INTO employees (name, email, phone, address, gender, date_of_birth, department_id, role_id, basic_salary, hire_date) VALUES (:name, :email, :phone, :address, :gender, :date_of_birth, :department_id, :role_id, :basic_salary, :hire_date)");
        return $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':gender' => $data['gender'],
            ':date_of_birth' => $data['date_of_birth'],
            ':department_id' => $data['department_id'],
            ':role_id' => 3, // Assuming '3' is the role_id for regular employees
            ':basic_salary' => $data['basic_salary'],
            ':hire_date' => $data['hire_date']
        ]);
    }

    public function addHR($data)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("INSERT INTO employees (name, email, phone, address, gender, date_of_birth, department_id, role_id, basic_salary, hire_date) VALUES (:name, :email, :phone, :address, :gender, :date_of_birth, :department_id, :role_id, :basic_salary, :hire_date)");
        return $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':gender' => $data['gender'],
            ':date_of_birth' => $data['date_of_birth'],
            ':department_id' => $data['department_id'],
            ':role_id' => 2, // Assuming '2' is the role_id for regular employees
            ':basic_salary' => $data['basic_salary'],
            ':hire_date' => $data['hire_date']
        ]);
    }

    public function checkEmailExists($email)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM employees WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetchColumn() > 0;
    }
}
?>