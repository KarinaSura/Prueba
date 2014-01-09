
var counter = 0;
 var num=0;
var fi;
var contenedor;
var ele;
var lbl;



function borrar(obj) {
  fi = document.getElementById('fiel'); 
  fi.removeChild(document.getElementById(obj)); 
}


function crear(obj) {


num++;
counter++;
fi = document.getElementById('fiel');
contenedor = document.createElement('div');
contenedor.id = 'div'+num;
contenedor.style.cssFloat = "right";
contenedor.style.styleFloat = "right";
contenedor.className = "add";
contenedor.style.cssWidth = "590px";
contenedor.style.cssBorder = "1px solid #D8D8D8";
contenedor.style.styleWidth = "500px";
contenedor.style.styleBorder = "1px solid #D8D8D8";
contenedor.style.cssClear = "both";
contenedor.style.styleClear = "both";


fi.appendChild(contenedor);






    ele = document.createElement('input'); 
  ele.type = 'image';
  ele.value = ''; 
  ele.style.float= "right"; 
ele.src = 'fileclose.png';     
ele.style.cssFloat = "right";
ele.style.styleFloat = "right";

ele.alt = 'Quitar'; 
  ele.name = 'div'+num; 
  ele.onclick = function () {borrar(this.name);} ;
  contenedor.appendChild(ele); 



lbl = document.createElement('label');
  lbl.innerHTML = 'Nombre:  ';
  contenedor.appendChild(lbl);
 
 ele = document.createElement('input'); 
  ele.type = 'text'; // 6
  ele.name = "nombre["+counter+"]";
 ele.size = '23'; // 6
 ele.id = 'nam'; // 6
  contenedor.appendChild(ele); 
lbl = document.createElement('label');
  lbl.innerHTML = '<font size="1">&nbsp;&nbsp;</font>';
  contenedor.appendChild(lbl);



lbl = document.createElement('label');
  lbl.innerHTML = 'Cargo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
  contenedor.appendChild(lbl);
 ele = document.createElement('input'); 
  ele.type = 'text';
  ele.size = '23';  ele.id = 'car'; // 6
  ele.name ="cargo["+counter+"]";
  contenedor.appendChild(ele); 
lbl = document.createElement('label');
  lbl.innerHTML = '&nbsp;&nbsp;&nbsp;';
  contenedor.appendChild(lbl);



 ele = document.createElement('br'); 
  contenedor.appendChild(ele); 


lbl = document.createElement('label');
  lbl.innerHTML = 'Web:&nbsp;&nbsp;';
  contenedor.appendChild(lbl);

ele = document.createElement('input'); 
  ele.type = 'checkbox'; 
     ele.style.cssVisibility= 'hidden';
     ele.style.styleVisibility='hidden';

  ele.name = "web["+counter+"]";
ele.value='web';
ele.id= "web["+counter+"]";
  contenedor.appendChild(ele); 


ele = document.createElement('input'); 
  ele.type = 'text'; 
  ele.size = '23';
  ele.name = "link["+counter+"]";   ele.className = "inpt";
  contenedor.appendChild(ele); 


lbl = document.createElement('label');
  lbl.innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Twitter:';
  contenedor.appendChild(lbl);
ele = document.createElement('input'); 
  ele.type = 'checkbox'; 
ele.onclick=function () {yesNo();} ;
  ele.name = "twitter["+counter+"]";
  ele.value = 'twit'; 
  ele.className = "inpt";
   ele.style.cssVisibility= 'hidden';
     ele.style.styleVisibility='hidden';

  contenedor.appendChild(ele); 



ele = document.createElement('input'); 
  ele.type = 'text'; 
  ele.size = '23';

  ele.name = "tw["+counter+"]";
   ele.className = "inpt";
  contenedor.appendChild(ele); 

 ele = document.createElement('br'); 
  contenedor.appendChild(ele); 


  lbl = document.createElement('label');
  lbl.innerHTML = 'Facebook:';
  contenedor.appendChild(lbl);


ele = document.createElement('input'); 
  ele.type = 'text'; 
  ele.size = '23';
  ele.name = "face["+counter+"]";
  contenedor.appendChild(ele); 



 ele = document.createElement('br'); 
  contenedor.appendChild(ele); 

lbl = document.createElement('label');
  lbl.innerHTML = 'Foto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
  contenedor.appendChild(lbl);
 ele = document.createElement('input'); 
  ele.type = 'file'; 
  ele.name = "imagen["+counter+"]";
  contenedor.appendChild(ele); 



}

function mostrardiv() {

div = document.getElementById('flotante');

div.style.display = '';

}

function cerrar() {

div = document.getElementById('flotante');

div.style.display='none';

}


function cerrar1() {

div = document.getElementById('mod');

div.style.display='none';

}



function mostrardiv1() {

div = document.getElementById('mod');

div.style.display = '';

}

function validar(){
valor = document.getElementById("nam"+num).value;

for( i=0;i<=valor;i++){

if(valor.length == '') {
     alert('los campos estan vacios.');
  return false;
}
}




}