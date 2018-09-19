<?php
 
 Class Conexion 
 {  
    public $cn;
    public $server;
    public $bd;
    public $user;
    public $pass;
    

    public function Cn()
    {
        $this->server="localhost";
        $this->db="mostrardatos";
        $this->user="root";
        $this->pass="";
        $this->cn=new mysqli($this->server,$this->user,$this->pass,$this->db);
        // var_dump($this->cn);
        $this->cn->set_charset("utf8");
        if($this->cn==false)
        {
            return NULL;
        
        }else{
            return $this->cn;
        }

    }
 }
 


























?>