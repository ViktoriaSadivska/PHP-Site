<?php


class Order
{


    public static function save($userName, $userPhone, $userComment, $userId, $products)
    {
        $products = json_encode($products);
        $db = Db::getConnection();
        $query = "INSERT INTO product_order (user_name,user_phone,user_comment,user_id,products) 
        VALUES (:user_name,:user_phone,:user_comment,:user_id,:products)";

        $result = $db->prepare($query);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $result->bindParam(':products', $products, PDO::PARAM_STR);


        return $result->execute();
    }


    public static function getOrderList()
    {
        $db = Db::getConnection();
        $query = "SELECT * FROM product_order ORDER BY id DESC";
        $result = $db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function getStatusText($status)
    {
        switch ($status) {
            case 1:
                return 'New order';
            case 2:
                return 'Processed';
            case 3:
                return 'In delivery';
            case 4:
                return 'Closed';
        }
    }

    public static function deleteOrderById($id) {
        $db = Db::getConnection();

        $query = "DELETE FROM product_order WHERE id = :id";

        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();

    }



    public static function getOrderById($id) {

        $db = Db::getConnection();

        $query = "SELECT * FROM product_order WHERE id = :id";

        $result = $db->prepare($query);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);

    }

    public static function getOrdersByUserId($userId) {

        $db = Db::getConnection();

        $query = "SELECT * FROM product_order WHERE user_id = :userId";

        $result = $db->prepare($query);
        $result->bindParam(':userId', $userId, PDO::PARAM_INT);
        $result->execute();

        return $result;

    }


    public static function updateOrderById($id, $userName, $userPhone, $userComment, $date, $status) {


        $db = Db::getConnection();

        $query = "UPDATE product_order 
                  SET 
                    user_name = :user_name,
                    user_phone = :user_phone,
                    user_comment = :user_comment,
                    date = :date,
                    status = :status 
                    WHERE id = :id";

        $result = $db->prepare($query);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);

        return $result->execute();
    }

}
