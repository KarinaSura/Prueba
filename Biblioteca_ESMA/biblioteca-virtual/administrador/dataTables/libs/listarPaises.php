<?php require_once('conexion.php');
$cn=  Conectarse();
$listado=  mysql_query("select * from libros",$cn);
?>

 <script type="text/javascript" language="javascript" src="js/jslistadopaises.js"></script>



            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
                <thead>
                    <tr>
                        <th>Codigo</th><!--Estado-->
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Edicion</th>
                        <th>Genero</th>
                        <th>Ubicacion</th>
                         <th>Lugar Edicion</th>
                          <th>Editorial</th>
                           <th>Año</th>
                            <th>Cant. Paginas</th>
                             <th>ISBN ISSN</th>
                              <th>Nivel</th>
                               <th>Idioma</th>
                                <th>Descriptor</th>
                                 <th>Cant. ejemplares</th>


                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                       
                     
                    </tr>
                </tfoot>
                  <tbody>
                    <?php

     
                   while($reg=  mysql_fetch_array($listado))
                   {
                               echo '<tr>';
                               echo '<td >'.mb_convert_encoding($reg['codigo_libro'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['titulo_libro'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['autor'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['edicion'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['genero'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['ubicacion'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['lugar_edicion'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['editorial'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['año'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['cant_paginas'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['ISBN_ISSN'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['nivel'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['idioma'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['descriptor'], "ISO-8859-1").'</td>';
                                echo '<td>'.mb_convert_encoding($reg['cant_ejemplares'], "ISO-8859-1").'</td>';
                               echo '</tr>';
                     
                        }

                        
                    ?>
                <tbody>
            </table>
