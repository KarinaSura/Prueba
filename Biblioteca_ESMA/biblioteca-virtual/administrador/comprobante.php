<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Sistema Bibliotecario ESMA</title>

<style media="print" type="text/css">
#imprimir {
visibility:hidden
}
   </style>

   </head>

    <body>
    <div id="container">
		<div id="header">
		
        </div>   
        
        <div id="menu">
                                      
          <?php
          include("menu.php");
          ?>
        </div>
        
       
                
              <div id="leftmenu_bottom"></div>
        </div>

		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
        	<h2>Comprobante</h2>

         <DIV ID="content_main">Este texto es lo que se imprimirá cuando se pulse el enlace.</DIV>


<a href="javascript:imprSelec('content_main')" >Imprime la ficha</a>


<script language="Javascript">

  function imprSelec(nombre)

  {

  var ficha = document.getElementById(nombre);

  var ventimp = window.open(' ', 'popimpr');

  ventimp.document.write( ficha.innerHTML );

  ventimp.document.close();

  ventimp.print( );

  ventimp.close();

  } 
  </script> 

        <div id="content_bottom"></div>
            
        <div id="footer"><h3><a href=""></a></h3></div>
        </div>
        </div>
        <div id="content_bottom"></div>
    
      </div>
      </div>


       <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>

      <h4 style="margin-left: 46%;margin-top:5px;color:white;"> Copyright © ESMA </h4>


    </div>
    </body>
    </html>
    </div>
    </body>
    </html>