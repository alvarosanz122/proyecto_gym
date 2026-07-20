function facturacion(){
let recibo = "";
let recibi = "";
let cantidad = 0;
let concepto ="";
let monto = 0;

recibo = prompt("numero de recibo");
recibi = prompt("nombre del cliente");
cantidad = prompt("cantidad recibidad... Escrita no numeros");
concepto = prompt("concepto del recibo");
monto = prompt("monto recibido en numeros");

document.getElementById("demo").innerHTML = "<span class='fs-1'>"+recibo+"</span>";
document.getElementById("demo1").innerHTML = "<span class='fs-1'>"+recibi+"</span>";
document.getElementById("demo2").innerHTML = "<span class='fs-1'>"+cantidad+"</span>";
document.getElementById("demo3").innerHTML = "<span class='fs-1'>"+concepto+"</span>";
document.getElementById("demo4").innerHTML ="<span class='fs-1 border border-primary border-3 rounded-4'>"+ monto+"</span>";
}