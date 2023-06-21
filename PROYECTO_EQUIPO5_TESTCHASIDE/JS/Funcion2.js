var i=0;
function Respuestas(){
    let CHASIDE=[];
    let ORIGINAL=[];
    let C,H,A,S,I,D,E;
    C =  document.getElementById("C").innerHTML;
    H = document.getElementById("H").innerHTML;
    A = document.getElementById("A").innerHTML;
    S = document.getElementById("S").innerHTML;
    I = document.getElementById("I").innerHTML;
    D = document.getElementById("D").innerHTML;
    E = document.getElementById("E").innerHTML;
    CHASIDE[0] = ORIGINAL[0] = C;
    CHASIDE[1] = ORIGINAL[1] = H;
    CHASIDE[2] = ORIGINAL[2] = A;
    CHASIDE[3] = ORIGINAL[3] = S;
    CHASIDE[4] = ORIGINAL[4] = I;
    CHASIDE[5] = ORIGINAL[5] = D;
    CHASIDE[6] = ORIGINAL[6] = E;

    /*for (i = CHASIDE.length - 1; i > 0; i--){
        for (let j = 0; j < i; j++) {
            if (CHASIDE[j] < CHASIDE[j + 1]) {
                [CHASIDE[j], CHASIDE[j + 1]] = [CHASIDE[j + 1], CHASIDE[j]];
            }
        }
    }*/

    //window.alert(CHASIDE[0]);
    
    CHASIDE[0]=Math.max(CHASIDE[0], CHASIDE[1], CHASIDE[2],CHASIDE[3],CHASIDE[4],CHASIDE[5],CHASIDE[6]);
    if(ORIGINAL[0]==CHASIDE[0]){
        document.getElementById("CPRO1").style.backgroundColor="black";
        document.getElementById("CPRO1").style.color="white";
        document.getElementById("CPRO2").style.backgroundColor="black";
        document.getElementById("CPRO2").style.color="white";
        document.getElementById("CTIT").style.backgroundColor="black";
        document.getElementById("CTIT").style.color="white";
        document.getElementById("CINTTIT").style.backgroundColor="black";
        document.getElementById("CINTTIT").style.color="white";
        document.getElementById("CAPTTIT").style.backgroundColor="black";
        document.getElementById("CAPTTIT").style.color="white";
        document.getElementById("CINT").style.backgroundColor="black";
        document.getElementById("CINT").style.color="white";
        document.getElementById("CAPT").style.backgroundColor="black";
        document.getElementById("CAPT").style.color="white";
    }
    if(ORIGINAL[1]==CHASIDE[0]){
        document.getElementById("HPRO1").style.backgroundColor="black";
        document.getElementById("HPRO1").style.color="white";
        document.getElementById("HPRO2").style.backgroundColor="black";
        document.getElementById("HPRO2").style.color="white";
        document.getElementById("HTIT").style.backgroundColor="black";
        document.getElementById("HTIT").style.color="white";
        document.getElementById("HINTTIT").style.backgroundColor="black";
        document.getElementById("HINTTIT").style.color="white";
        document.getElementById("HAPTTIT").style.backgroundColor="black";
        document.getElementById("HAPTTIT").style.color="white";
        document.getElementById("HINT").style.backgroundColor="black";
        document.getElementById("HINT").style.color="white";
        document.getElementById("HAPT").style.backgroundColor="black";
        document.getElementById("HAPT").style.color="white";
    }
    if(ORIGINAL[2]==CHASIDE[0]){
        document.getElementById("APRO1").style.backgroundColor="black";
        document.getElementById("APRO1").style.color="white";
        document.getElementById("APRO2").style.backgroundColor="black";
        document.getElementById("APRO2").style.color="white";
        document.getElementById("ATIT").style.backgroundColor="black";
        document.getElementById("ATIT").style.color="white";
        document.getElementById("AINTTIT").style.backgroundColor="black";
        document.getElementById("AINTTIT").style.color="white";
        document.getElementById("AAPTTIT").style.backgroundColor="black";
        document.getElementById("AAPTTIT").style.color="white";
        document.getElementById("AINT").style.backgroundColor="black";
        document.getElementById("AINT").style.color="white";
        document.getElementById("AAPT").style.backgroundColor="black";
        document.getElementById("AAPT").style.color="white";
    }
    if(ORIGINAL[3]==CHASIDE[0]){
        document.getElementById("SPRO1").style.backgroundColor="black";
        document.getElementById("SPRO1").style.color="white";
        document.getElementById("SPRO2").style.backgroundColor="black";
        document.getElementById("SPRO2").style.color="white";
        document.getElementById("STIT").style.backgroundColor="black";
        document.getElementById("STIT").style.color="white";
        document.getElementById("SINTTIT").style.backgroundColor="black";
        document.getElementById("SINTTIT").style.color="white";
        document.getElementById("SAPTTIT").style.backgroundColor="black";
        document.getElementById("SAPTTIT").style.color="white";
        document.getElementById("SINT").style.backgroundColor="black";
        document.getElementById("SINT").style.color="white";
        document.getElementById("SAPT").style.backgroundColor="black";
        document.getElementById("SAPT").style.color="white";
    }
    if(ORIGINAL[4]==CHASIDE[0]){
        document.getElementById("DIEPRO1").style.backgroundColor="black";
        document.getElementById("DIEPRO1").style.color="white";
        document.getElementById("DIEPRO2").style.backgroundColor="black";
        document.getElementById("DIEPRO2").style.color="white";
        document.getElementById("ITIT").style.backgroundColor="black";
        document.getElementById("ITIT").style.color="white";
        document.getElementById("IINTTIT").style.backgroundColor="black";
        document.getElementById("IINTTIT").style.color="white";
        document.getElementById("IAPTTIT").style.backgroundColor="black";
        document.getElementById("IAPTTIT").style.color="white";
        document.getElementById("IINT").style.backgroundColor="black";
        document.getElementById("IINT").style.color="white";
        document.getElementById("IAPT").style.backgroundColor="black";
        document.getElementById("IAPT").style.color="white";
    }
    if(ORIGINAL[5]==CHASIDE[0]){
        document.getElementById("DIEPRO1").style.backgroundColor="black";
        document.getElementById("DIEPRO1").style.color="white";
        document.getElementById("DIEPRO2").style.backgroundColor="black";
        document.getElementById("DIEPRO2").style.color="white";
        document.getElementById("DTIT").style.backgroundColor="black";
        document.getElementById("DTIT").style.color="white";
        document.getElementById("DINTTIT").style.backgroundColor="black";
        document.getElementById("DINTTIT").style.color="white";
        document.getElementById("DAPTTIT").style.backgroundColor="black";
        document.getElementById("DAPTTIT").style.color="white";
        document.getElementById("DINT").style.backgroundColor="black";
        document.getElementById("DINT").style.color="white";
        document.getElementById("DAPT").style.backgroundColor="black";
        document.getElementById("DAPT").style.color="white";
    }
    if(ORIGINAL[6]==CHASIDE[0]){
        document.getElementById("DIEPRO1").style.backgroundColor="black";
        document.getElementById("DIEPRO1").style.color="white";
        document.getElementById("DIEPRO2").style.backgroundColor="black";
        document.getElementById("DIEPRO2").style.color="white";
        document.getElementById("ETIT").style.backgroundColor="black";
        document.getElementById("ETIT").style.color="white";
        document.getElementById("EINTTIT").style.backgroundColor="black";
        document.getElementById("EINTTIT").style.color="white";
        document.getElementById("EAPTTIT").style.backgroundColor="black";
        document.getElementById("EAPTTIT").style.color="white";
        document.getElementById("EINT").style.backgroundColor="black";
        document.getElementById("EINT").style.color="white";
        document.getElementById("EAPT").style.backgroundColor="black";
        document.getElementById("EAPT").style.color="white";
    }
}