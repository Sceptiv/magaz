<?php

class Order {
    
    public static function save($userName, $userPhone, $userComment, $userId, $products){
        
        $products = json_encode($products);
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products)'
                . 'VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)';
        
        $result = $db->prepare($sql);
        $result->bindParam('user_name', $userName, PDO::PARAM_STR);
        $result->bindParam('user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam('user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam('user_id', $userId, PDO::PARAM_STR);
        $result->bindParam('products', $products, PDO::PARAM_STR);
        
        return $result->execute();
        
    }
    
    public static function getOrders(){
        $orders = array();
        $db = Db::getConnection();
        
        
        $sql = 'SELECT id, user_name, user_phone, user_comment, user_id, date, products, status FROM product_order ORDER BY id DESC';
        
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        
        $i = 0;
        while($row = $result->fetch()){
            $orders[$i]['id'] = $row['id'];
            $orders[$i]['user_name'] = $row['user_name'];
            $orders[$i]['user_comment'] = $row['user_comment'];
            $orders[$i]['user_id'] = $row['user_id'];
            $orders[$i]['date'] = $row['date'];
            $orders[$i]['products'] = $row['products'];
            $orders[$i]['status'] = $row['status'];
            $orders[$i]['user_phone'] = $row['user_phone'];
            $i++;
        }
        return $orders;
    }
}

