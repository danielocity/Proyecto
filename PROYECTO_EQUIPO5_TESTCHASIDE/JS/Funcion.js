S = localStorage.getItem('S');
var i=0,identificador,numero=1;
function PregSelec(){
    for(i=0;numero<=98;i++){
        if(S[i]==1){
            identificador=numero.toString();
            document.getElementById(identificador).style.backgroundColor="black";
            document.getElementById(identificador).style.color="white";
            numero++;
        }
        if(S[i]==0){
            numero++;
        }
    }
    var Ci,Hi,Ai,Si,Ii,Di,Ei,Ca,Ha,Aa,Sa,Ia,Da,Ea;
    let Interc=[];
    let Aptitc=[];
    Interc[0] = Ci = document.getElementById("Ci").innerHTML;
    Interc[1] = Hi = document.getElementById("Hi").innerHTML;
    Interc[2] = Ai = document.getElementById("Ai").innerHTML;
    Interc[3] = Si = document.getElementById("Si").innerHTML;
    Interc[4] = Ii = document.getElementById("Ii").innerHTML;
    Interc[5] = Di = document.getElementById("Di").innerHTML;
    Interc[6] = Ei = document.getElementById("Ei").innerHTML;
    Aptitc[0] = Ca = document.getElementById("Ca").innerHTML;
    Aptitc[1] = Ha = document.getElementById("Ha").innerHTML;
    Aptitc[2] = Aa = document.getElementById("Aa").innerHTML;
    Aptitc[3] = Sa = document.getElementById("Sa").innerHTML;
    Aptitc[4] = Ia = document.getElementById("Ia").innerHTML;
    Aptitc[5] = Da = document.getElementById("Da").innerHTML;
    Aptitc[6] = Ea = document.getElementById("Ea").innerHTML;
    for (i = Interc.length - 1; i > 0; i--){
        for (let j = 0; j < i; j++) {
            if (Interc[j] < Interc[j + 1]) {
                [Interc[j], Interc[j + 1]] = [Interc[j + 1], Interc[j]];
            }
        }
    }
    for (i = Aptitc.length - 1; i > 0; i--){
        for (let j = 0; j < i; j++) {
            if (Aptitc[j] < Aptitc[j + 1]) {
                [Aptitc[j], Aptitc[j + 1]] = [Aptitc[j + 1], Aptitc[j]];
            }
        }
    }
    if(Ci==Interc[0]){
        document.getElementById("Ci").style.backgroundColor="black";
        document.getElementById("Ci").style.color="white";
    }
    if(Hi==Interc[0]){
        document.getElementById("Hi").style.backgroundColor="black";
        document.getElementById("Hi").style.color="white";
    }
    if(Ai==Interc[0]){
        document.getElementById("Ai").style.backgroundColor="black";
        document.getElementById("Ai").style.color="white";
    }
    if(Si==Interc[0]){
        document.getElementById("Si").style.backgroundColor="black";
        document.getElementById("Si").style.color="white";
    }
    if(Ii==Interc[0]){
        document.getElementById("Ii").style.backgroundColor="black";
        document.getElementById("Ii").style.color="white";
    }
    if(Di==Interc[0]){
        document.getElementById("Di").style.backgroundColor="black";
        document.getElementById("Di").style.color="white";
    }
    if(Ei==Interc[0]){
        document.getElementById("Ei").style.backgroundColor="black";
        document.getElementById("Ei").style.color="white";
    }
    if(Ca==Aptitc[0]){
        document.getElementById("Ca").style.backgroundColor="black";
        document.getElementById("Ca").style.color="white";
    }
    if(Ha==Aptitc[0]){
        document.getElementById("Ha").style.backgroundColor="black";
        document.getElementById("Ha").style.color="white";
    }
    if(Aa==Aptitc[0]){
        document.getElementById("Aa").style.backgroundColor="black";
        document.getElementById("Aa").style.color="white";
    }
    if(Sa==Aptitc[0]){
        document.getElementById("Sa").style.backgroundColor="black";
        document.getElementById("Sa").style.color="white";
    }
    if(Ia==Aptitc[0]){
        document.getElementById("Ia").style.backgroundColor="black";
        document.getElementById("Ia").style.color="white";
    }
    if(Da==Aptitc[0]){
        document.getElementById("Da").style.backgroundColor="black";
        document.getElementById("Da").style.color="white";
    }
    if(Ea==Aptitc[0]){
        document.getElementById("Ea").style.backgroundColor="black";
        document.getElementById("Ea").style.color="white";
    }
}