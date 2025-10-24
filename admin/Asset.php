<?php

Class Asset{
    private function getPDO(){
        try {
            $pdo = new PDO("mysql:dbname=ems_db;host=localhost",'root','myatthinzar1259');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
    }

    public function addAsset($data){
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("INSERT INTO assets 
        (assets_name,asset_type, brand, model, serial_number, purchase_date, purchase_price, warranty_expires,
         notes ) VALUES 
        (:assets_name, :asset_type ,:brand, :model, :serial_number, :purchase_date, :purchase_price, :warranty_expires, :notes)");
        return $stmt->execute([
            ':assets_name' => $data['assets_name'],
            ':asset_type' => $data['asset_type'],
            ':brand' => $data['brand'],
            ':model' => $data['model'],
            ':serial_number' => $data['serial_number'],
            ':purchase_date' => $data['purchase_date'],
            ':purchase_price' => $data['purchase_price'],
            ':warranty_expires' => $data['warranty_expires'],
            ':notes' => $data['notes'],
        ]);
    }

    public function getAllAsset(){
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM assets");
        return $stmt->fetchAll();
    }

    public function getAssetById($id){
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM assets WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll();
    }

    public function updateAsset($data){
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("UPDATE `assets` SET assets_name = :assets_name ,asset_type = :asset_type, brand = :brand, model =:model, serial_number =:serial_number, purchase_date =:purchase_date, purchase_price =:purchase_price, warranty_expires =:warranty_expires,
        employee_id =:employee_id , assign_date =:assign_date, return_date =:return_date, asset_status =:asset_status, condition_status =:condition_status, notes =:notes WHERE id=:id");
        
        $employee_id = !empty($data['employee_id']) ? $data['employee_id'] : null;
        $assign_date = !empty($data['assign_date']) ? $data['assign_date'] : null;
        $return_date = !empty($data['return_date']) ? $data['return_date'] : null;

        $stmt->bindParam(":id", $data["id"]);
        $stmt->bindParam(":assets_name", $data["assets_name"]);
        $stmt->bindParam(":asset_type", $data["asset_type"]);
        $stmt->bindParam(":brand", $data["brand"]);
        $stmt->bindParam(":model", $data["model"]);
        $stmt->bindParam(":serial_number", $data["serial_number"]);
        $stmt->bindParam(":purchase_date", $data["purchase_date"]);
        $stmt->bindParam(":purchase_price", $data["purchase_price"]);
        $stmt->bindParam(":warranty_expires", $data["warranty_expires"]);
        $stmt->bindParam(":employee_id",  $employee_id, PDO::PARAM_INT);
        $stmt->bindParam(":assign_date", $assign_date, PDO::PARAM_STR);
        $stmt->bindParam(":return_date", $return_date, PDO::PARAM_STR);
        $stmt->bindParam(":asset_status", $data["asset_status"]);
        $stmt->bindParam(":condition_status", $data["condition_status"]);
        $stmt->bindParam(":notes", $data["notes"]);

        if($stmt->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function deleteAsset($id){
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("DELETE FROM assets WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}

?>