<?php 

class AdminOrderController{
    
    public function actionIndex(){
     
        $ordersList = Order::getOrders();
        $products = array();
        foreach($ordersList as $order){
            $products['user_id'] = $order['user_id'];
            $products['user_name'] = $order['user_name'];
            $products['user_phone'] = $order['user_phone'];
            $products['date'] = $order['date'];
            
            foreach (json_decode($order['products']) as $id => $count){
                $products['products']['id'] = $id;
                $products['products']['count'] = $count;
                }
        }
        print_r($products['products']);
        
        require_once(ROOT.'/views/admin_order/index.php');
        return true;
    }
}