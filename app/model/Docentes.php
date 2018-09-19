<?php

    require_once 'Cn.php';

    class Docente
    {   public $id;
        public $codDocente;
        public $codUni;
        public $apePaterno;
        public $apeMaterno;
        public $nombres;
        public $depAcademico;
        public $telefono;
        public $celular;
        public $email;

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
        function NewDocente()
        {
            $cn=new Conexion;
            $mysqli=$this->Cn();
            $lista=$mysqli->prepare('call sp_newDocente()');
            $lista->execute();
            if($lista)
            {
                $lista->listarDocentes();
            }else
            {
                echo "Error no se pudo registrar usuario";
            }
            return $lista;
        }
          /********************* 
         Busca de Docentes
        ***********************/
        function viewDocente()
        {   
            $cn =new Cn();
            $busqueda = mysqli_real_escape_string(addslashes($_POST['palabra']));
                /*consulta fulltext con el motor myisam*/
        //consulta con like y el motor innodb
            $query = "SELECT * FROM docentes WHERE id LIKE concat('%' , busqueda , '%')
            OR codDocente_fk LIKE concat('%' , busqueda , '%')
            OR codUni LIKE concat('%' , busqueda , '%')
            OR apePaterno LIKE concat('%' , busqueda , '%')
            OR apeMaterno LIKE concat('%' , busqueda , '%')
            OR nombres LIKE concat('%' , busqueda , '%')
            OR depAcademico LIKE concat('%' , busqueda , '%')
            OR telefono LIKE concat('%' , busqueda , '%')
            OR celular LIKE concat('%' , busqueda , '%')
            OR email LIKE concat('%' , busqueda , '%')
            OR dedicacion LIKE concat('%' , busqueda , '%')
            OR fecNacimiento LIKE concat('%' , busqueda , '%')
            OR sexo LIKE concat('%' , busqueda , '%')
            OR direccion LIKE concat('%' , busqueda , '%')
            OR observacion LIKE concat('%' , busqueda , '%')
            OR descripcion LIKE concat('%' , busqueda , '%');";
            $res = mysqli_query($cn,$query);
            while ($reg=mysql_fetch_assoc($res))
            {
                $this->busqueda[] = $reg;
            }
            return $this->busqueda;

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