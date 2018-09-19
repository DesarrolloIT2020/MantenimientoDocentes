<?php

    require_once 'Cn.php';

    class Docente
    {   public ;
        public $codDoce;
        public $cod;
        public $apePate;
        public $apeMate;
        public $nomb;
        public $depAcadem;
        public $telef;
        public $celu;
        public $em;

        function __Construct()
        {

        }
        /********************* 
         Lista de Docentes
        ***********************/
        function listarDocentes()
        {
            $cn=new Conexion();
            $mysqli=$cn->Cn();
            // var_dump($mysqli);
            $lista=$mysqli->prepare("call sp_listaDocente()");
            $lista->execute();
            if($lista->{'error'}==""){
                $row=$lista->get_result();
                $array=[];
                while($rows=$row->fetch_assoc())
                {
                    $array[]=$rows;
                }
            }else{
                $array=[
                    "error"=>$lista->{'error'}
                ];
            }
            // $json=json_encode($array,JSON_FORCE_OBJECT);
            return $array;
        }
        /********************* 
         Ingresa Nuevo Docente
        ***********************/
        /*function NewDocente()
        {
            $cn=new Conexion;
            $mysqli=$this->Cn();
            $lista=$mysqli->prepare('call sp_newDocente()');
            $lista->execute();

        }
          /********************* 
         Busca de Docentes
        ***********************/
        /*function viewDocente()
        {

        }
          /********************* 
         Modificacion de Docentes
        ***********************/
        /*function updateDocente()
        {

        }
          /********************* 
         Elimina de Docentes
        ***********************/
        /*function deleteDocente()
        {

        }
       








*/
    }


?>