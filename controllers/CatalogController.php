<?php
//include_once ROOT.'/models/Category.php';
//include_once ROOT.'/models/Product.php';
//include_once ROOT. '/components/Pagination.php';

class CatalogController {
    
    public function actionIndex(){
        
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(5);
        
        require_once(ROOT.'/views/catalog/index.php');
        
        return true;
    }
    
    public function actionCategory($categoryId, $page = 1){
       
        
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $categoryProduct = array();
        $categoryProduct = Product::getProductsListByCategory($categoryId, $page);
        
        $total = Product::getTotalProductsInCategory($categoryId);
        
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        
        require_once(ROOT.'/views/catalog/category.php');
        
        return true;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

