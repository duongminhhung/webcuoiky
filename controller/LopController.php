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
    public function login(){
        // require 'view/css/style.css';
        require 'view/home/login.php';

    }
    public function signup(){
        require 'model/login.php';
        if(isset($erro)){
            $loi = $erro;
        require 'view/home/login.php';
        }
    }
    public function signin(){
        require 'model/signin.php';
        require 'view/home/header.php';

    }
    public function logout()
    {
        require 'model/logout.php';
    }
    public function contact(){
        require 'view/home/test.php';

    }
    public function cart(){
        require 'view/home/cart.php';

    }
    public function add_cart(){
        require 'model/add_cart.php';
        require 'view/home/cart.php';
    }
    public function update_quantity(){
        require 'model/update_quantity.php';
    }
    public function search(){
        require 'model/search.php';
        require 'view/home/search.php';

    }
    
    
}
