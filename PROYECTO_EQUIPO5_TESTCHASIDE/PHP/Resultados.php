<!--
    Interpretación de los resultados
    REVISADO EN LABORATORIO
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Respuestas</title>
        <link rel="stylesheet" href="../CSS/Estilo.css">
        <script type="text/JavaScript" src="../JS/Funcion2.js"></script>
    </head>
    <body onload="Respuestas()">
        <?php     
            $servername = "localhost";
            $username = "admin";
            $password = "amiel4041";
            $dbname = "datos_test";
            $conn= new mysqli($servername,$username,$password,$dbname);
            $sql="SELECT id,Ci,Hi,Ai,Si,Ii,Di,Ei,Ca,Ha,Aa,Sa,Ia,Da,Ea FROM CHASIDETEST";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    if($row["id"]==1){
                        $C=$row["Ci"]+$row["Ca"];
                        $H=$row["Hi"]+$row["Ha"];
                        $A=$row["Ai"]+$row["Aa"];
                        $S=$row["Si"]+$row["Sa"];
                        $I=$row["Ii"]+$row["Ia"];
                        $D=$row["Di"]+$row["Da"];
                        $E=$row["Ei"]+$row["Ea"];
                        echo "<div class='tablainvisible'><table><tr>";
                        echo "<td id='C'>".$C."</td>";
                        echo "<td id='H'>".$H."</td>";
                        echo "<td id='A'>".$A."</td>";
                        echo "<td id='S'>".$S."</td>";
                        echo "<td id='I'>".$I."</td>";
                        echo "<td id='D'>".$D."</td>";
                        echo "<td id='E'>".$E."</td>";
                        echo "</tr></table></div>";
                    }
                }
            }else{
                echo "0 results";
            }
            $conn->close();
        ?>
        <div class="interpretacion">
            <table>
                <tr>
                    <td colspan="3" id="CTIT">C- ADMINISTRATIVAS Y CONTABLES</td>
                    <td></td>
                    <td colspan="3" id="HTIT">H- HUMANÍSTICAS Y SOCIALES</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                    <td>5</td>
                    <td></td>
                    <td>7</td>
                </tr>
                <tr>
                    <td id="CINTTIT">INTERESES</td>
                    <td></td>
                    <td id="CAPTTIT">APTITUDES</td>
                    <td></td>
                    <td id="HINTTIT">INTERESES</td>
                    <td></td>
                    <td id="HAPTTIT">APTITUDES</td>
                </tr>
                <tr>
                    <td id="CINT">
                        Organizativo<br>
                        Supervisión<br>
                        Orden<br>
                        Análisis y síntesis<br>
                        Colaboración<br>
                        Cálculo<br>
                    </td>
                    <td></td>
                    <td id="CAPT">
                        Persuasivo<br>
                        Objetivo<br>
                        Práctico<br>
                        Tolerante<br>
                        Responsable<br>
                        Ambicioso<br>
                    </td>
                    <td></td>
                    <td id="HINT">
                        Precisión verbal<br>
                        Organización<br>
                        Relación de Hechos<br>
                        Lingüística<br>
                        Orden<br>
                        Justicia<br>
                    </td>
                    <td></td>
                    <td id="HAPT">
                        Responsable<br>
                        Justo<br>
                        Conciliador<br>
                        Persuasivo<br>
                        Sagaz<br>
                        Imaginativo<br>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                    <td>5</td>
                    <td></td>
                    <td>7</td>
                </tr>
                <tr>
                    <td colspan="3" id="ATIT">A- ARTÍSTICAS</td>
                    <td></td>
                    <td colspan="3" id="STIT">S- MEDICINA Y CIENCIAS DE LA SALUD</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                    <td>5</td>
                    <td></td>
                    <td>7</td>
                </tr>
                <tr>
                    <td id="AINTTIT">INTERESES</td>
                    <td></td>
                    <td id="AAPTTIT">APTITUDES</td>
                    <td></td>
                    <td id="SINTTIT">INTERESES</td>
                    <td></td>
                    <td id="SAPTTIT">APTITUDES</td>
                </tr>
                <tr>
                    <td id="AINT">
                        Estético<br>
                        Armónico<br>
                        Manual<br>
                        Visual<br>
                        Auditivo<br>
                    </td>
                    <td></td>
                    <td id="AAPT">
                        Sensible<br>
                        Imaginativo<br>
                        Creativo<br>
                        Detallista<br>
                        Innovador<br>
                        Intuitivo<br>
                    </td>
                    <td></td>
                    <td id="SINT">
                        Asistir<br>
                        Investigativo<br>
                        Precisión<br>
                        Senso-Perceptivo<br>
                        Analítico<br>
                        Ayudar<br>
                    </td>
                    <td></td>
                    <td id="SAPT">
                        Altruista<br>
                        Solidario<br>
                        Paciente<br>
                        Comprensivo<br>
                        Respetuoso<br>
                        Persuasivo<br>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                    <td>5</td>
                    <td></td>
                    <td>7</td>
                </tr>
                <tr>
                    <td colspan="3" id="ITIT">I- INGENIERÍA Y COMPUTACIÓN</td>
                    <td></td>
                    <td colspan="3" id="DTIT">D- DEFENSA Y SEGURIDAD</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                    <td>5</td>
                    <td></td>
                    <td>7</td>
                </tr>
                <tr>
                    <td id="IINTTIT">INTERESES</td>
                    <td></td>
                    <td id="IAPTTIT">APTITUDES</td>
                    <td></td>
                    <td id="DINTTIT">INTERESES</td>
                    <td></td>
                    <td id="DAPTTIT">APTITUDES</td>
                </tr>
                <tr>
                    <td id="IINT">
                        Cálculo<br>
                        Científico<br>
                        Manual<br>
                        Exacto<br>
                        Planificar<br>
                    </td>
                    <td></td>
                    <td id="IAPT">
                        Preciso<br>
                        Práctico<br>
                        Crítico<br>
                        Analítico<br>
                        Rígido<br>                       
                    </td>
                    <td></td>
                    <td id="DINT">
                        Justicia<br>
                        Equidad<br>
                        Colaboración<br>
                        Espíritu de<br>
                        Equipo<br>
                        Liderazgo<br>
                    </td>
                    <td></td>
                    <td id="DAPT">
                        Arriesgado<br>
                        Solidario<br>
                        Valiente<br>
                        Agresivo<br>
                        Persuasivo<br>                      
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" id="ETIT">E- CIENCIAS EXACTAS Y AGRARIAS</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>3</td>
                    <td></td>
                </tr>
                <tr>
                    <td id="EINTTIT">INTERESES</td>
                    <td></td>
                    <td id="EAPTTIT">APTITUDES</td>
                </tr>
                <tr>
                    <td id="EINT">
                        Clasificar<br>
                        Numérico<br>
                        Análisis y Síntesis<br>
                        Organización<br>
                        Orden<br>
                        Investigación<br>                      
                    </td>
                    <td></td>
                    <td id="EAPT">
                        Metódico<br>
                        Analítico<br>
                        Observador<br>
                        Introvertido<br>
                        Paciente<br>
                        Seguro<br>
                    </td>
                </tr>
            </table>
        </div>
        <div class="profesiones">
            <table>
                <tr>
                    <td>ÁREAS (CHASIDE)</td>
                    <td>PROFESIONES</td>
                </tr>
                <tr>
                    <td id="APRO1">A- ARTÍSTICAS, CREATIVIDAD Y ARTES</td>
                    <td id="APRO2">Diseño gráfico, diseño y decoración de interiores, diseño de jardines, diseño de modas, diseño de joyas, artes plásticas, (pinturas, estructuras, danza, teatro y artesanías), dibujo publicitario, restauración, museología, modelaje, fotografía, fotografía digital, gestión gráfica y publicitaria, locución y publicidad, actuación y camarografía, arte industrial, producción audiovisual, multimedia, comunicación y producción en radio y televisión, diseño de paisaje, cine y video, comunicación escénica para televisión.</td>
                </tr>
                <tr>
                    <td id="HPRO1">H- HUMANÍSTICAS Y SOCIALES</td>
                    <td id="HPRO2">Psicología en general, trabajo social, idiomas, educación internacional, histórica y geográfica, periodismos, periodismo digital, derecho, ciencia, política, sociología, antropología, arqueología, gestión social y desarrollo, consejería familiar, comunicación y publicidad. Administración educativa, educación especial, psicopedagogía, estimulación temprana, traducción simultánea, lingüística, educación de párvulos, bibliotecas, museología, relaciones internacionales y diplomacia, comunicación social mención marketing y gestión de empresas, redacción creativa y publicitaria, relación pública y comunicación organizacional: hotelería y turismo, teología industrial.</td>
                </tr>
                <tr>
                    <td id="CPRO1">C- ADMINISTRATIVAS, CONTABLES, ECONÓMICAS Y FINANCIERAS</td>
                    <td id="CPRO2">Administración de empresas, contabilidad, auditoría, ventas, marketing estratégico, gestión y negocios internacionales, gestión empresarial, gestión financiera, ingeniería comercial, comercio exterior, banca y finanzas, gestión de rrhh, comunicación integradas en marketing, administración de empresas, ecoturismo y hospitalidad, ciencia económicas y financieras. Administración de ciencias públicas, ciencias empresariales, comercio electrónico, emprendedores, gestión de organismos públicos (municipios, ministerios, etc.) gestión de centros educativos.</td>
                </tr>
                <tr>
                    <td id="DIEPRO1">
                        D- DEFENSA Y SEGURIDAD<br>
                        I- INGENIERÍA Y COMPUTACIÓN<br>
                        E- CIENCIAS EXACTAS Y AGRARIAS<br>
                    </td>
                    <td id="DIEPRO2">Ingeniería en sistemas computacionales, geología, ingeniería civil, arquitectura, electrónica, telemática, telecomunicaciones, ingeniería mecatrónica, (robótica), imagen y sonidos, minas y petróleos, metalurgia, ingeniería mecánica, ingeniería industrial, física matemática, ingeniería en estadística, ingeniería automotriz, biotecnología ambiental, ingeniería geográfica, carreras militares (marina, aviación, ejército) ingeniería en costas y obras portuarias, estadística, informática, desarrollo de sistemas, tecnología de informática educativa, astronomía, ingeniería en ciencias geográficas y desarrollo sustentable.</td>
                </tr>
                <tr>
                    <td id="SPRO1">S- MEDICINA CIENCIAS DE LA SALUD, ECOLÓGICAS Y BIOLÓGICAS</td>
                    <td id="SPRO2">Biología, Bioquímica, Farmacia, Biología Marina, Bioanálisis, Biotecnología, Ciencias Ambientales, Zootecnia, Veterinaria, Nutrición y Estética, Cosmetología, Dietética y Estética, Medicina, Obstetricia, Urgencias Médicas, Odontología, Enfermería, Tecnología, Oceanografía y Ciencias Ambientales, Médica, Agronomía, Horticultura y Fruticultura, Ingeniería de Alimentos, Gastronomía, Chef, Cultura Física, Deportes y Rehabilitación, Gestión Ambiental, Ingeniería Ambiental, Optometría, Homeopatía, Reflexología.</td>
                </tr>
            </table>
        </div>
        <form action="Instrucciones.php" method="post">
            <input type="submit" name="return" value="Hacer test de nuevo"/>
        </form>
    </body>
</html>