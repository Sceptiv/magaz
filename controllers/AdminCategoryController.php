<?php

class AdminCategoryController extends AdminBase {
    
public function actionIndex(){
    
    self::checkAdmin();
    
    $categoriesList = Category::getCategoriesListAdmin();
    
    require_once(ROOT.'/views/admin_category/index.php');
    
    return true;
}    

public function actionDelete($id){
    
    self::checkAdmin();
    
    if(isset($_POST['submit'])){
        Category::deleteCategoryById($id);
        
        header("Location: /admin/category");
    }
    require_once(ROOT.'/views/admin_category/delete.php');
    return true;
}

    public function actionCreate(){
        
        self::checkAdmin();
        
        $categoriesList = Category::getCategoriesListAdmin();
        
        if(isset($_POST['submit'])){
            $options['name'] = $_POST['name'];
            $options['status'] = $_POST['status'];
            $options['sort_order'] = $_POST['sort_order'];
            
        $errors = false;
        
        if(!isset($options['name']) || empty($options['name'])){
            $errors = 'Заполните поля';
        }
        
        if($errors == false){
            $id = Category::createCategory($options);
            
            header("Location: /admin/category");
            
            }
       
        }
        
        require_once(ROOT.'/views/admin_category/create.php');
        
        return true;
    }
    
    public function actionUpdate($id){
        
         self::checkAdmin();
        
        $category = Category::getCategoryById($id);
        
        if(isset($_POST['submit'])){
            $options['name'] = $_POST['name'];
            $options['status'] = $_POST['status'];
            $options['sort_order'] = $_POST['sort_order'];
            
            $update = Category::updateCategoryById($id, $options);
            header("Location: /admin/category");
        }
        
        require_once(ROOT.'/views/admin_category/update.php');
        
        return true;
    }
    
}
