<?php 
    require_once ('../model/conecta.php');
    // require_once ('../model/Docentes.php');
    // $ob-> new Docente();
    // $res= $ob->viewDocente($palabra);
    $palabra=$_POST['columna'];
    $busqueda =$_POST['palabra'];
    /*consulta fulltext con el motor myisam*/
//consulta con like y el motor innodb
        switch($palabra){
            case('id'):
            $query= "SELECT * FROM docentes WHERE id LIKE concat('%' , $busqueda , '%')";
            break;
            case('codigo'):
            $query="SELECT * FROM docentes WHERE codDocente_fk LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE codUni LIKE concat('%' , $busqueda , '%')";
            break;
            case('apePaterno'):
            $query="SELECT * FROM docentes WHERE apePaterno LIKE concat('%' , $busqueda , '%')";
            case('codUni'):
            $query="SELECT * FROM docentes WHERE apeMaterno LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE nombres LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE depAcademico LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE telefono LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE celular LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE email LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE dedicacion LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE fecNacimiento LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE sexo LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE direccion LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE observacion LIKE concat('%' , $busqueda , '%')";
            break;
            case('codUni'):
            $query="SELECT * FROM docentes WHERE descripcion LIKE concat('%' , $busqueda , '%')";
            break;
            default:
            $query = "SELECT * FROM docentes WHERE id LIKE concat('%' , $busqueda , '%')
            OR codDocente_fk LIKE concat('%' , $busqueda , '%')
            OR codUni LIKE concat('%' , $busqueda , '%')
            OR apePaterno LIKE concat('%' , $busqueda , '%')
            OR apeMaterno LIKE concat('%' , $busqueda , '%')
            OR nombres LIKE concat('%' , $busqueda , '%')
            OR depAcademico LIKE concat('%' , $busqueda , '%')
            OR telefono LIKE concat('%' , $busqueda , '%')
            OR celular LIKE concat('%' , $busqueda , '%')
            OR email LIKE concat('%' , $busqueda , '%')
            OR dedicacion LIKE concat('%' , $busqueda , '%')
            OR fecNacimiento LIKE concat('%' , $busqueda , '%')
            OR sexo LIKE concat('%' , $busqueda , '%')
            OR direccion LIKE concat('%' , $busqueda , '%')
            OR observacion LIKE concat('%' , $busqueda , '%')
            OR descripcion LIKE concat('%' , $busqueda , '%');";}
        $res = mysqli_query($conexion,$query);
        $row=mysqli_num_rows($res);
        if($row==0)
        {
            echo "<h2>No hay resultados para su búsqueda...</h2>";
        }else{
            var_dump($row);
        }
// while ($reg=mysqli_fetch_assoc($res))
// {
//     $busqueda[] = $reg;
// }
?>
    <table>
         <tr class="tr" style="background-color:#0AD0D0;text-align:center">
            <th >id</th>
            <th>codDocente_fk</th>
            <th>codUni</th>
            <th>apePaterno</th>
            <th>apeMaterno</th>
            <th>nombres</th>
            <th>depAcademico</th>
            <th>telefono</th>
            <th>celular</th>
            <th>email</th>
            <th>dedicacion</th>
            <th>fecNacimiento</th>
            <th>sexo</th>
            <th>direccion</th>
            <th>observacion</th>
            <th>descripcion</th>
            <th>condicion</th>
            <th>estado</th>
            <th>fecModificacion</th>
          </tr>
          <?php
        //COMPROBAMOS SI HAY REGISTROS EN LA BUSQUEDA, SI NO LOS HAY, MOSATRAMOS UN MENSAJE DICIENDO QUE NO HAY RESULTADOS, EN OTRO CASO, MOSTRAMOS LOS RESULTADOS
        // if(count($res)==0)
        // {
        //     echo "<h2>No hay resultados para su búsqueda...</h2>";
        // }else{
            // for($i=0;$i<sizeof($busqueda);$i++)
            // {
        //         ?>
        //         <tr>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["id"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["codDocente_fk"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["codUni"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["apePaterno"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["apeMaterno"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["nombres"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["depAcademico"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["telefono"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["celular"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["email"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["dedicacion"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["fecNacimiento"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["sexo"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["direccion"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["observacion"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["descripcion"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["condicion"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["estado"] ?>
        //             </td>
        //             <td align="center">
        //                 <?php echo $busqueda[$i]["fecModificacion"] ?>
        //             </td>
        //         </tr>
        //         <?php
        //     }
        // }
        ?>
    </table>