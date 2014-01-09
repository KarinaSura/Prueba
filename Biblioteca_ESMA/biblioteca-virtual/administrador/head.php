<head>
 <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>

<script src="jquery.js"></script>  
<link rel="stylesheet" type="text/css" href="style.css" />

<title>Sistema Bibliotecario ESMA</title>
   <script src="jquery.js"></script>     
     <script src="validCampoFranz.js"></script>
    <script language="JavaScript" type="text/javascript"> 
<!-- 
function Confirmar(frm) { 

var borrar = confirm("Esta seguro/a de que quiere eliminar estos registros?"); 

return borrar; //true o false 

                  } 
//-->

                 function txt(){

                document.getElementById('formm').style.display = "block";
                var valor = document.getElementById('est').value;
                document.getElementById('otr').style.display = "block";
                var valorid = document.getElementById('identi').value;
                document.getElementById('actu').style.display = "block";
                document.getElementById('otr').value=valor;
                document.getElementById('identi').value=valor;
                  }


 $(function(){
  $("#mostrar").click(function(event) {
  event.preventDefault();
  $("#caja").slideToggle();
});
$("#caja a").click(function(event) {
  event.preventDefault();
  $("#caja").slideUp();
});
});


 $(function(){
  $("#mostrar1").click(function(event) {
  event.preventDefault();
  $("#caja1").slideToggle();
});
$("#caja1 a").click(function(event) {
  event.preventDefault();
  $("#caja1").slideUp();
});
});
    
<!-- 
function Confirmar(frm) { 

var borrar = confirm("Estás seguro/a de que quiere eliminar estos registros?"); 

return borrar; //true o false 

} 
//--> 
 function imprSelec(nombre)

  {

  var ficha = document.getElementById(nombre);

  var ventimp = window.open(' ', 'popimpr');

  ventimp.document.write( ficha.innerHTML );

  ventimp.document.close();

  ventimp.print( );

  ventimp.close();

  } 
    
<!-- 
function Confirmar(frm) { 

var borrar = confirm("Estás seguro/a de que quiere eliminar estos registros?"); 

return borrar; //true o false 

} 
//--> 

</script>

 </head>