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
    public function select(){
        require 'model/Home.php';
        require 'view/home/products1.php';
    }
    public function contact(){
        require 'view/home/contact.php';
    }
    public function login(){
        // require 'view/css/style.css';
        require 'view/home/login.php';

    }
    
    
}
