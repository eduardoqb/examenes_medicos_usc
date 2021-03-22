n =  new Date();
//Año
y = n.getFullYear();
//Mes
m = n.getMonth();
//Día
d = n.getDate();

//Lo ordenas a gusto.
document.getElementById("seleccionDia").innerHTML = d + "-" + m + "-" + y;// JavaScript Document