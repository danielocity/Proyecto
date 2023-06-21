<!--
    Respuestas del test
    REVISADO EN LABORATORIO
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hoja de respuestas</title>
        <link rel="stylesheet" href="../CSS/Estilo.css">
        <script type="text/JavaScript" src="../JS/Funcion.js"></script>
    </head>
    <body onload="PregSelec()">
        <?php     
            $servername = "localhost";
            $username = "admin";
            $password = "amiel4041";
            $dbname = "datos_test";
            $conn= new mysqli($servername,$username,$password,$dbname);
            $Ci=($_POST["98"]??"0")+($_POST["12"]??"0")+($_POST["64"]??"0")+($_POST["53"]??"0")+($_POST["85"]??"0")+($_POST["1"]??"0")+($_POST["78"]??"0")+($_POST["20"]??"0")+($_POST["71"]??"0")+($_POST["91"]??"0");
            $Hi=($_POST["9"]??"0")+($_POST["34"]??"0")+($_POST["80"]??"0")+($_POST["25"]??"0")+($_POST["95"]??"0")+($_POST["67"]??"0")+($_POST["41"]??"0")+($_POST["74"]??"0")+($_POST["56"]??"0")+($_POST["89"]??"0");
            $Ai=($_POST["21"]??"0")+($_POST["45"]??"0")+($_POST["96"]??"0")+($_POST["57"]??"0")+($_POST["28"]??"0")+($_POST["11"]??"0")+($_POST["50"]??"0")+($_POST["3"]??"0")+($_POST["81"]??"0")+($_POST["36"]??"0");
            $Si=($_POST["33"]??"0")+($_POST["92"]??"0")+($_POST["70"]??"0")+($_POST["8"]??"0")+($_POST["87"]??"0")+($_POST["62"]??"0")+($_POST["23"]??"0")+($_POST["44"]??"0")+($_POST["16"]??"0")+($_POST["52"]??"0");
            $Ii=($_POST["75"]??"0")+($_POST["6"]??"0")+($_POST["19"]??"0")+($_POST["38"]??"0")+($_POST["60"]??"0")+($_POST["27"]??"0")+($_POST["83"]??"0")+($_POST["54"]??"0")+($_POST["47"]??"0")+($_POST["97"]??"0");
            $Di=($_POST["84"]??"0")+($_POST["31"]??"0")+($_POST["48"]??"0")+($_POST["73"]??"0")+($_POST["5"]??"0")+($_POST["65"]??"0")+($_POST["14"]??"0")+($_POST["37"]??"0")+($_POST["58"]??"0")+($_POST["24"]??"0");
            $Ei=($_POST["77"]??"0")+($_POST["42"]??"0")+($_POST["88"]??"0")+($_POST["17"]??"0")+($_POST["93"]??"0")+($_POST["32"]??"0")+($_POST["68"]??"0")+($_POST["49"]??"0")+($_POST["35"]??"0")+($_POST["61"]??"0");
            $Ca=($_POST["15"]??"0")+($_POST["51"]??"0")+($_POST["2"]??"0")+($_POST["46"]??"0");
            $Ha=($_POST["63"]??"0")+($_POST["30"]??"0")+($_POST["72"]??"0")+($_POST["86"]??"0");
            $Aa=($_POST["22"]??"0")+($_POST["39"]??"0")+($_POST["76"]??"0")+($_POST["82"]??"0");
            $Sa=($_POST["69"]??"0")+($_POST["40"]??"0")+($_POST["29"]??"0")+($_POST["4"]??"0");
            $Ia=($_POST["26"]??"0")+($_POST["59"]??"0")+($_POST["90"]??"0")+($_POST["10"]??"0");
            $Da=($_POST["13"]??"0")+($_POST["66"]??"0")+($_POST["18"]??"0")+($_POST["43"]??"0");
            $Ea=($_POST["94"]??"0")+($_POST["7"]??"0")+($_POST["79"]??"0")+($_POST["55"]??"0");
            $C=$Ci+$Ca;
            $H=$Hi+$Ha;
            $A=$Ai+$Aa;
            $S=$Si+$Sa;
            $I=$Ii+$Ia;
            $D=$Di+$Da;
            $E=$Ei+$Ea;
            if(isset($_POST['submit'])){
                $sql="UPDATE CHASIDETEST SET Ci=$Ci,Hi=$Hi,Ai=$Ai,Si=$Si,Ii=$Ii,Di=$Di,Ei=$Ei,Ca=$Ca,Ha=$Ha,Aa=$Aa,Sa=$Sa,Ia=$Ia,Da=$Da,Ea=$Ea WHERE id=1";
                $conn->query($sql);
                $conn->close();
            }
        ?>
		<p><img src="../IMG/Flechas.png" class="flechas" alt="Intereses Aptitudes"/></p>
        <div class="resultados">
            <ul>
                <li>A continuación por cada pregunta que contestaste que SI has un circulo al rededor del número.</li>
                <li>Cada número marcado vale un punto. Súmalos verticalmente y coloca el resultado en los casilleros vacíos debajo de cada columna.</li>
        <div class="tablachaside">
            <table>
                <tr>
                    <td>C</td>
                    <td>H</td>
                    <td>A</td>
                    <td>S</td>
                    <td>I</td>
                    <td>D</td>
                    <td>E</td>
                </tr>
                <tr>
                    <td id="98">98</td>
                    <td id="9">9</td>
                    <td id="21">21</td>
                    <td id="33">33</td>
                    <td id="75">75</td>
                    <td id="84">84</td>
                    <td id="77">77</td>
                </tr>
                <tr>
                    <td id="12">12</td>
                    <td id="34">34</td>
                    <td id="45">45</td>
                    <td id="92">92</td>
                    <td id="6">6</td>
                    <td id="31">31</td>
                    <td id="42">42</td>
                </tr>
                <tr>
                    <td id="64">64</td>
                    <td id="80">80</td>
                    <td id="96">96</td>
                    <td id="70">70</td>
                    <td id="19">19</td>
                    <td id="48">48</td>
                    <td id="88">88</td>
                </tr>
                <tr>
                    <td id="53">53</td>
                    <td id="25">25</td>
                    <td id="57">57</td>
                    <td id="8">8</td>
                    <td id="38">38</td>
                    <td id="73">73</td>
                    <td id="17">17</td>
                </tr>
                <tr>
                    <td id="85">85</td>
                    <td id="95">95</td>
                    <td id="28">28</td>
                    <td id="87">87</td>
                    <td id="60">60</td>
                    <td id="5">5</td>
                    <td id="93">93</td>
                </tr>
                <tr>
                    <td id="1">1</td>
                    <td id="67">67</td>
                    <td id="11">11</td>
                    <td id="62">62</td>
                    <td id="27">27</td>
                    <td id="65">65</td>
                    <td id="32">32</td>
                    <td>C</td>
                    <td>H</td>
                    <td>A</td>
                    <td>S</td>
                    <td>I</td>
                    <td>D</td>
                    <td>E</td>
                </tr>
                <tr>
                    <td id="78">78</td>
                    <td id="41">41</td>
                    <td id="50">50</td>
                    <td id="23">23</td>
                    <td id="83">83</td>
                    <td id="14">14</td>
                    <td id="68">68</td>
                    <td id="15">15</td>
                    <td id="63">63</td>
                    <td id="22">22</td>
                    <td id="69">69</td>
                    <td id="26">26</td>
                    <td id="13">13</td>
                    <td id="94">94</td>
                </tr>
                <tr>
                    <td id="20">20</td>
                    <td id="74">74</td>
                    <td id="3">3</td>
                    <td id="44">44</td>
                    <td id="54">54</td>
                    <td id="37">37</td>
                    <td id="49">49</td>
                    <td id="51">51</td>
                    <td id="30">30</td>
                    <td id="39">39</td>
                    <td id="40">40</td>
                    <td id="59">59</td>
                    <td id="66">66</td>
                    <td id="7">7</td>
                </tr>
                <tr>
                    <td id="71">71</td>
                    <td id="56">56</td>
                    <td id="81">81</td>
                    <td id="16">16</td>
                    <td id="47">47</td>
                    <td id="58">58</td>
                    <td id="35">35</td>
                    <td id="2">2</td>
                    <td id="72">72</td>
                    <td id="76">76</td>
                    <td id="29">29</td>
                    <td id="90">90</td>
                    <td id="18">18</td>
                    <td id="79">79</td>
                </tr>
                <tr>
                    <td id="91">91</td>
                    <td id="89">89</td>
                    <td id="36">36</td>
                    <td id="52">52</td>
                    <td id="97">97</td>
                    <td id="24">24</td>
                    <td id="61">61</td>
                    <td id="46">46</td>
                    <td id="86">86</td>
                    <td id="82">82</td>
                    <td id="4">4</td>
                    <td id="10">10</td>
                    <td id="43">43</td>
                    <td id="55">55</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                </tr>
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
                                echo "<div class='resultjs'><tr>";
                                echo "<td id='Ci'>".$row["Ci"]."</td>";
                                echo "<td id='Hi'>".$row["Hi"]."</td>";
                                echo "<td id='Ai'>".$row["Ai"]."</td>";
                                echo "<td id='Si'>".$row["Si"]."</td>";
                                echo "<td id='Ii'>".$row["Ii"]."</td>";
                                echo "<td id='Di'>".$row["Di"]."</td>";
                                echo "<td id='Ei'>".$row["Ei"]."</td>";
                                echo "<td id='Ca'>".$row["Ca"]."</td>";
                                echo "<td id='Ha'>".$row["Ha"]."</td>";
                                echo "<td id='Aa'>".$row["Aa"]."</td>";
                                echo "<td id='Sa'>".$row["Sa"]."</td>";
                                echo "<td id='Ia'>".$row["Ia"]."</td>";
                                echo "<td id='Da'>".$row["Da"]."</td>";
                                echo "<td id='Ea'>".$row["Ea"]."</td>";
                                echo "</tr></div>";
                            }
                        }
                    }else{
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </table>
        </div>
                <li>Observa tu cuadro de análisis y redondea los dos puntajes más altos en INTERESES y APTITUDES.</li>
                <li>Después busca la letra de ese puntaje (C, H, A, S, I, D o E) más alto en el presente cuadro y fíjate que aspectos sobresalen y si coinciden tanto aptitudes como intereses.</li>
                <li>En el caso que tengas muchos resultados iguales compáralos en este cuadro y piensa cuales de estas características se asemejan más a tu personalidad.</li>
            </ul>
        </div>
        <form action="Resultados.php" method="post">
            <input type="submit" name="resultado" value="Ver resultados"/>
        </form>
    </body>
</html>