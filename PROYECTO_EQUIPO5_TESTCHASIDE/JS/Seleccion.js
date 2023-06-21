function obtenerResultados() {
    var seleccion = new Array();
    var sumatoria = new Array();
    var i=0;
    var contid;
    var identificador;
    contid=1;
    for(i=0;i<98;i++){
        identificador=contid.toString();
        seleccion[i]=document.getElementById(identificador).checked;
        contid++;
    }
    for(i=0;i<98;i++){
        if(seleccion[i]){
            sumatoria[i+1]=1;
        }else{
            sumatoria[i+1]=0;
        }
    }
    localStorage.setItem('S', sumatoria);
}