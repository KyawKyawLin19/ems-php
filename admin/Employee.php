<?php
class Employee
{
    private function getPDO()
    {
        try {
            $pdo = new PDO("mysql:dbname=ems_db;host=localhost",'root','EBP!23ebp');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
    }

    // public function getAllEmployees()
    // {
    //     $pdo = $this->getPDO();
    //     $stmt = $pdo->query("SELECT * FROM employees WHERE is_terminated = 0 AND is_deleted = 0");
    //     return $stmt->fetchAll();
    // }

    // public function getEmployeeByRole($id)
    // {
    //     $pdo = $this->getPDO();
    //     $stmt = $pdo->prepare("SELECT * FROM employees WHERE role_id = :role_id AND  is_terminated = 0 AND is_deleted = 0");
    //     $stmt->execute(['role_id' => $id]);
    //     return $stmt->fetchAll();
    // }

    public function getEmployeeById($id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM employees WHERE id = :id AND is_deleted = 0");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    // Soft delete (Terminate employee)
    public function terminateEmployee($id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("UPDATE employees 
                               SET is_terminated = 1, termination_date = CURDATE() 
                               WHERE id = :id
                               AND  is_terminated = 0 
                               AND is_deleted = 0");
        return $stmt->execute([':id' => $id]);
    }

    // Reactivate employee
    public function activateEmployee($id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("UPDATE employees 
                               SET is_terminated = 0, termination_date = NULL 
                               WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    // Hard delete (completely remove from database)
    public function deleteEmployee($id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("UPDATE employees SET is_deleted = 1 WHERE id = :id AND is_terminated = 1");
        return $stmt->execute([':id' => $id]);
    }

    public function addEmployee($data, $loggedInUserId)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("INSERT INTO employees (name, employee_code, department_id, email, phone, address, date_of_birth,  gender, basic_salary,  hire_date, role_id, created_by, created_at)
                                VALUES (:name, :employee_code, :department_id, :email, :phone, :address, :date_of_birth, :gender, :basic_salary, :hire_date , :role_id, :created_by, :created_at)");
        return $stmt->execute([
            ':name' => $data['name'],
            ':employee_code' => 'EMP' . str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT),
            ':department_id' => $data['department_id'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':date_of_birth' => $data['date_of_birth'],
            ':gender' => $data['gender'],
            ':basic_salary' => $data['basic_salary'],
            ':hire_date' => $data['hire_date'],
            ':role_id' => 3, // Assuming '3' is the role_id for regular employees
            ':created_by' => $loggedInUserId,
            'created_at' => date('Y-m-d H:i:s'),
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

    public function updateEmployee($id, $data){
        $pdo = $this->getPDO();
        $fields = [];
        $params = [];

        foreach ($data as $column => $value) {
            $fields[] = "$column = :$column";
            $params[":$column"] = $value;
        }

        $params[':id'] = $id;
        $sql = "UPDATE employees SET " . implode(', ', $fields) . " WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function checkEmailExists($email)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM employees WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetchColumn() > 0;
    }

    public function getDepartmentName($department_id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT name FROM departments WHERE id = :department_id");
        $stmt->execute(['department_id' => $department_id]);
        $result = $stmt->fetch();
        return $result ? $result->name : null;
    }

    public function getEmployeesWithDepartment()
    {
        $pdo = $this->getPDO();
        $sql = "SELECT e.*, d.name AS department_name
                FROM employees e
                LEFT JOIN departments d ON e.department_id = d.id
                WHERE e.role_id = 3
                AND e.is_deleted = 0";

        $stmt = $pdo->query($sql);
        return $stmt->fetchAll();
    }

}
?>
