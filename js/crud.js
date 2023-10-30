var nuevoID;
var db=openDatabase("apiros_proveedor","1.0","apiros_proveedor",3306)

function limpiar(){
    document.getElementById("Fecha_Inicial").value="";
    document.getElementById("Fecha_Final").value="";
}