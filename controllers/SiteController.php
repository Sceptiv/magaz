<?php
//include_once ROOT.'/models/Category.php';
//include_once ROOT.'/models/Product.php';

class SiteController {
    
    public function actionIndex(){
        
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(5);
        
        $sliderProducts = array();
        $sliderProducts = Product::getRecommendedProducts();
       
        require_once(ROOT.'/views/site/index.php');
        
        return true;
    }
    
    public function actionContact(){
        
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if(isset($_POST['submit'])){
            
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            
            $errors = false;
            echo $userEmail;
            if(!User::checkEmail($userEmail)){
                $errors[] = 'Неправильный E-mail';
            }
            
            if($errors == false){
                $adminMail = 'afir@ua.fm';
                $subject = 'Тема письма';
                $message = "Текст: $userText". "<br/>От: $userEmail";
                $result = mail($adminMail, $subject, $message);
                
                $result = true;
            }
        }
        require_once(ROOT.'/views/site/contact.php');
        
        return true;
    }
}
