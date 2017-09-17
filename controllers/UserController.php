<?php

class UserController {
    
    public function actionRegister() {
        
        $name = '';
        $email = '';
        $password = '';
        
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $register = false;
            $errors = false;
            
            if(!User::checkName($name)){
                $errors['name'] = 'Имя должно юыть больше 2 символов';
            }
            
            if(!User::checkPassword($password)){
                $errors['Password'] = 'Пароль должно юыть больше 6 символов';
            }
            if(!User::checkEmail($email)){
                $errors['email'] = 'Неправильный email';
            }
            
            if(User::checkEmailExists($email)){
                $errors[] = 'Эта почта уже используется';
            }
            if($errors == false) {
                if(User::registerUser($name, $email, $password)){
                    $register = true;
                }
            }
        }
        
        require_once(ROOT.'/views/user/register.php');
        
        return true;
        
    }
    
    public function actionLogin(){
       
        $email = '';
        $password = '';
        
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;     
            
            if(!User::checkPassword($password)){
                $errors['Password'] = 'Пароль должно юыть больше 6 символов';
            }
            if(!User::checkEmail($email)){
                $errors['email'] = 'Неправильный email';
            }
            $userId = User::checkUserData($email, $password);
            
            if($userId == false){
                $errors[] = 'Неправильные данные для входа на сайт';
            }else{
                User::auth($userId);
                header("location: /cabinet/");
            }
            
        }
        require_once(ROOT.'/views/user/login.php');
    
    return true;
    }
    
    public function actionLogout(){
        
        unset($_SESSION['user']);
        header("location: /");
    }
    
}


