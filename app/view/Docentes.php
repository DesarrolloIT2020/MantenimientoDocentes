<html Doctype:html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta name="viewport" content="width=device-width, user-scalable=no"> -->
<link rel="stylesheet" href="../../public/assets/css/table.css">
<link rel="stylesheet" href="../../public/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../public/vendor/fontawesome-free/all.min.css">
</head>
<body>
        <div class="show">
            <div class="nav-link ">
                <ul class="nav">
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Docentes</a></li>
                    <li><a href="">Aulas</a></li>
                    <li><a href="">otros</a></li>
                </ul>
            </div>
        </div>
    <div>
            <?php
            require_once '../model/Cn.php';
            require_once '../model/Docentes.php';
                $objd=new Docente;
                $listar=$objd->listarDocentes();
            ?>  <div class="descarga">
                    <a  href=""><img src="../../public/assets/img/pdf.png" width="50px"></a>
                    <a  href=""><img src="../../public/assets/img/word.png" width="50px"></a>
                    <a  href=""><img src="../../public/assets/img/excel.ico" width="50px"></a>
                </div>  
                <div class="editar">
                    <a href=""><img src="../../public/assets/img/new.png" alt=""></a>
                    <a href=""><img src="../../public/assets/img/editar2.png" alt=""></a>
                    <a href=""><img src="../../public/assets/img/borrar.png" alt=""></a>
                </div>
                <div class="buscar">
                    <form action="../controllers/buscar.php" method="POST">
                    <select name="columna" id="columna">
                        <option value="#">Seleccione Columna</option>
                        <option value="todo">Todo</option>
                        <option value="id">ID</option>
                        <option value="codigo">Codigo</option>
                        <option value="codUni">CodUni</option>
                        <option value="apePaterno">apePaterno</option>
                        <option value="apeMaterno">apeMaterno</option>
                        <option value="nombres">Nombres</option>
                        <option value="departamento">Departamento</option>
                        <option value="telefono">Telefono</option>
                        <option value="celular">Celular</option>
                        <option value="email">Email</option>
                        <option value="dedicacion">Dedicacion</option>
                        <option value="fecN">Nacimiento</option>
                        <option value="sexo">Sexo</option>
                        <option value="direccion">Direccion</option>
                        <option value="observacion">Observacion</option>
                        <option value="descripcion">Descripcion</option>
                        <option value="condicion">Condicion</option>
                        <option value="estado">Estado</option>
                        <option value="fecM">FecModificacion</option>
                       

                    </select>
                    <input  type="search" name="palabra" placeholder="Palabra a buscar">
                    <input  type="submit" value="Buscar">
                    </form>
                </div>
                <table border="1" class="table"  style="border:1px solid #000;border-collapse:collapse" >
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
               $color="#EAF5F5";
                foreach($listar as $row)
                {   
                    echo "<tr>".
                    "<td  style='background-color:$color;text-align:center'>".$row['id']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['codDocente_fk']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['codUni']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['apePaterno']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['apeMaterno']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['nombres']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['depAcademico']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['telefono']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['celular']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['email']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['dedicacion']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['fecNacimiento']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['sexo']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['direccion']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['observacion']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['descripcion']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['condicion']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['estado']."</td>".
                    "<td  style='background-color:$color;text-align:center'>".$row['fecModificacion']."</td>".
                    "</tr>";
                }
            ?>
            </table>
    </div>


                <script src="../../public/vendor/jquery/jquery.min"></script>
</body>
</html>




