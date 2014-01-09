
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Biblioteca Virtual ESMA</title>

<!-- Código del Icono -->
<link href="iconos/Favicon.ico" type="image/x-icon" rel="shortcut icon" />


<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Free CSS Template | Designed by TemplateMo.com  -->

<!-- Include the jQuery library (local or CDN) -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Include the plugin *after* the jQuery library -->
<script src="bjqs.min.js"></script>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>

<!-- Include the basic styles -->
<link type="text/css" rel="Stylesheet" href="bjqs.css" />
  
</head>

 
<body>
<div id="templatemo_container">

    	
        <div id="templatemo_shopping_cart">
       	      
        </div>
 
     
     
     
     	
   <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
		
          <li><img src="img/banner_3.fw.png" title="Automatically generated caption"></li>
          <li><img src="img/banner_sekai22.fw.png" title="Automatically generated caption"></li>
          <li><img src="img/banner_sekai-1.fw.png" title="Automatically generated caption"></li>
		 
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
	  
<!-- Banner slider -->
      <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 250,
            width       : 990,
            responsive  : true
          });

        });
      </script>
     
     
	 
	 <!-- menu -->
     
<div id="templatemo_menu_panel">
        <ul>
            
            <li><a href="index.php" target="_parent">INICIO</a></li>
            <li><a href="nosotros.php" target="_parent">NOSOTROS</a></li>
            <li><a href="galeria.php" target="_parent">GALERIA</a></li>  
            <li><a href="login.php">LOGIN</a></li> 
            <li><a href="contactanos.php">CONTACTANOS</a></li>                     
        </ul> 
    </div> <!-- end of menu -->
    
    <div id="templatemo_content">
    
    	<div id="templatemo_content_left">
        	<h1>Bienvenido</h1>
            <p>La biblioteca virtual de ESMA te ofrece una gran variedad de libros.</p>
                        
             <div class="cleaner_with_height">&nbsp;</div>
             
             <h2>Nuevos Libros</h2>
             <div class="product_box">
             	<h3>Las aventuras de Huckleberry Finn</h3>
                <img src="images/MARK.jpeg" alt="image" width="200px" height="250px" /></br>
                <p>Las aventuras de Huckleberry Finn, obra de Mark Twain, considerado el Dickens norteamericano, representa una de las primeras grandes novelas estadounidenses.También fue una de las primeras novelas escritas en inglés vernacular estadounidense. </p>   </br>   </br>                     
             	<div class="prestar"><a href="prestamos.php">Prestar</a></div><a href="#"></a>
             </div>
             <div class="product_box">
             	<h3>El Principe feliz</h3> </br>  
                <img src="images/el_principe_feliz.jpg" alt="image" width="200px" height="250px"/></br>
                <p>Oscar Wilde El príncipe feliz fue publicado por primera vez en 1888 en la colección El Príncipe Feliz y otros cuentos, que reúne cinco cuentos de Oscar Wilde. Fue escrito dos años después de haber nacido el último hijo del autor. Estaría presumiblemente inspirado por Piotr Kropotkin, fiel amigo del escritor.</p>   </br>                         
             	<div class="prestar"><a href="prestamos.php">Prestar</a></div><a href="#"></a>
             </div>
             <div class="product_box">
             	<h3>Mujercitas</h3></br>  
                <img src="images/mujercitas.jpg" alt="image" width="200px" height="250px" /></br>
                <p>Una novela de Louisa May Alcott, que trata la vida de cuatro niñas que se convierten en mujeres con la Guerra Civil en los Estados Unidos como fondo, entre 1861 y 1865. Está basada en las propias experiencias de la autora cuando era una niña y vivía en la ciudad de Concord.</p> </br> </br> 
                                           
             	<div class="prestar"><a href="prestamos.php">Prestar</a></div>
             </div>
             <!--<?php
            // include('conexion.php');
//$tabla="libros";   //NOMBRE DE LA TABLA A MOSTRAR
//$result = mysql_query("select titulo_libro, autor, genero from $tabla"); 
//echo "<table bgcolor=\"\" align=center style=\"border:0px outset black\">";
//for ($i = 0; $i < mysql_num_fields($result); $i++)
    { 
    //print "<th>".mysql_field_name($result, $i)."</th>\n"; 
    } 
//while ($registro = mysql_fetch_row($result))
    {
    //echo "<tr>";
    //foreach($registro  as $clave)
        {
        //echo "<td bgcolor=\"\"style=\"border:1px groove black\" align=\"center\">",$clave,"</td>";
        }
       // echo"<td><input type='button' value='Prestar' name='prestar'></td>";
    }
//echo "</tr></table>";
//mysql_close(); 
?> -->
             
			<div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of ocntent left -->
        
        <div id="templatemo_content_right">
        	<div class="templatemo_right_section">
            	<h4>BUSCAR</h4>
                <div class="templatemo_right_section_content">
                  <form id="form1" name="form" action="resultado.php">
<input type="text" name="dato"/>
	<input type="submit" name="variable" />						
		</form>	

                 </div>
            </div>
            
            <div class="templatemo_right_section">
            	<h4>CATEGORIAS</h4>
                <div class="templatemo_right_section_content">
				
                    <ul>
                        <li><a href="informatica.php">INFORMATICA</a></li>
                        <li><a href="enciclopedia.php">ENCICLOPEDIA</a></li>
                        <li><a href="bibliotecas.php">BIBLIOTECAS</a></li>
                        <li><a href="diccionarios.php">DICCIONARIOS</a></li>
                        <li><a href="educacion.php">EDUCACION</a></li>
                        <li><a href="sociales.php">SOCIALES</a></li>
                        <li><a href="ciencias.php">CIENCIAS</a></li>
                        <li><a href="guias.php">GUIAS</a></li>
                        <li><a href="otras.php">OTRAS...</a></li>
                    </ul>
                </div>
            </div>
          </div>

            <!-- end of content right-->
        
        <div class="cleaner">&nbsp;</div>
    </div>
    
     <div id="templatemo_footer_panel">
        <div id="footer_left">
         
        </div>
        <div id="footer_right">
            Copyright © ESMA <a href="#"></a><br />
			
        </div>
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
<!--  Free CSS Template | Designed by TemplateMo.com  --> 
</a></div></body>
</html>