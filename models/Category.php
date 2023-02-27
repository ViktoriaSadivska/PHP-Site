<?php

class Category {


    public static function getCategoriesList() {
        $db = Db::getConnection();
        $query = "SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC";
        $result = $db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteCategoryById($id) {
        $db = Db::getConnection();
        $query = "DELETE FROM category WHERE id = :id";

        $result=$db->prepare($query);
        $result->bindParam(':id',$id,PDO::PARAM_INT);
   
        return $result->execute();

    }

    public static function createCategory($options) {
        $db = Db::getConnection();

        $query = "INSERT INTO category 
        (name, sort_order, status) 
        VALUES(:name, :sort_order, :status)";

        $result=$db->prepare($query);

        $result->bindParam(':name', $options["name"], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options["sort_order"], PDO::PARAM_INT);
        $result->bindParam(':status', $options["status"], PDO::PARAM_INT);

        if($result->execute()) {
            return $db->lastInsertId();
        }

        return 0;
    }

    public static function getCategoryById($id) {
        $db = Db::getConnection();
        $query = "SELECT * FROM category WHERE id = $id";
        $result = $db->query($query);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public static function getStatusText($status){
        if($status)
            return "Visible";
        else
            return "Hidden";
    }

    public static function updateCategory($id, $options) {
        $db = Db::getConnection();

        $query = "UPDATE category 
        SET name = :name, sort_order = :sort_order, status = :status
        WHERE id = :id";
        

        $result=$db->prepare($query);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options["name"], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options["sort_order"], PDO::PARAM_INT);
        $result->bindParam(':status', $options["status"], PDO::PARAM_INT);

        return $result->execute();
    }

}