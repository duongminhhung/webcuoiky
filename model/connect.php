<?php
class connect{
    private $host = 'localhost:3306';
    private $user = 'root';
    private $password ='';
    private $database = 'webcuoiky';
    public function cnt(){
        $connect = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $connect;
    }
    public function sql($sql){
        $connect =$this->cnt();
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
        return $result;
    }
    public function excute($sql){
        $connect =$this->cnt();
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
    }
}