<?php 
class LopController{
    public function index()
    {   
        require 'model/Home.php';
        require 'view/home/index.php';
    }
    public function about()
    {   
        require 'model/Home.php';
        require 'view/home/about.php';
    }
    public function products(){ 
        
        require 'model/Home.php';
        require 'view/home/products.php';
    }
    
    
}
