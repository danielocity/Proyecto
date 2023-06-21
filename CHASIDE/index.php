

<html>

<head>
  <title>Cuestionario CHASIDE</title>
  <script src="funcionres.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    span {
      display: flex;
    }
    
   
.tabla{
              background-image: url('izq.jpg'), url('abj.png');
              background-size: 350px 100px,450px 100px;
              background-position: 80% 10% , 94% 35%;
              background-repeat: no-repeat;
            }
  .chaside{
    color: rgb(0, 0, 0);
      text-align: center;
      font-family: "Comic Sans MS", "Comic Sans";
      font-weight: bold;

  }

    header {
     
      position: relative;
      text-align: left;
      width: 100%;
      height: 30%;
    }

    center {
      position: relative;
      width: 100%;
      height: 100%;

    }
    .content{
      position: relative;
    }
    .label {
  position: absolute; /* el label debe ser de posición absoluta */
  top: 107px; /* posición vertical */
  left:60%; /* posición horizontal */
  color: rgb(0, 0, 0); /* color del texto */
  font-family: "Comic Sans MS", "Comic Sans";
  font-size: 24px; /* tamaño del texto */
  font-weight: bold; /* peso del texto */
}
.label2 {
  position: absolute; /* el label debe ser de posición absoluta */
  top: 32%; /* posición vertical */
  left:59%; /* posición horizontal */
  color: rgb(0, 0, 0); /* color del texto */
  font-family: "Comic Sans MS", "Comic Sans";
  font-size: 24px; /* tamaño del texto */
  font-weight: bold; /* peso del texto */
}

    .ima{
      height: 150px;
      width: 200px;
      border: hidden;
    }

    .titulo {
      text-align: center;
      font-size: 40px;

      font-family: "Calibri", sans-serif;
      font-weight: bold;


    }

    .texto {
      color: rgb(0, 0, 0);
      font-family: "Calibri", sans-serif;

    }

    table {
      table-layout: auto;
      width: 30%;
      border-collapse: collapse;
      border: 2px solid black;
     
;

    }

    th {
      background-color: rgb(255, 255, 255);
      width: 20%;
      border: 1px solid black;
      padding: 10px;
    }

    td {
      width: 10%;
      align-items: center;
      font-family: "Comic Sans MS", "Comic Sans";
      border: 1px solid black;
      padding: 10px;
    }

    .num {
      color: rgb(0, 0, 0);
      text-align: center;
      font-family: "Comic Sans MS", "Comic Sans";
      font-weight: bold;
    }

    /* The container */
    .container {
      display: block;
      position: relative;
      padding-left: 25px;
      margin-bottom: 5px;
      cursor: pointer;
      font-size: 20px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-color: rgb(255, 255, 255);
    }
    
  input[type="checkbox"] {
  opacity: 1;
  position: relative;
  margin-right: 0px;
  cursor: pointer;
}

input[type="checkbox"]::before {
  align-items: center;
  content: "";
  display: inline-block;
  position: absolute;
  left: -10px;
  top: -38px;
  width: 30px;
  height: 30px;
  border-radius: 100%;
  border: 4px solid #ffffff;
}

input[type="checkbox"]:checked::before {
  background-color: rgba(255, 255, 255, 0);
  border-color: red;
  
}


  </style>
</head>

<body>
  <span>

  
    <header>
      <p class="titulo">Test Vocacional</p>
      <p class="texto">Instrucciones <br>A continuación lee atentamente cada pregunta. Marca en la Hoja de respuestas solo la que
        contestes afirmativamente (o sea que contestes SI). Lee TODAS las preguntas sin omitir ninguna.
      </p>
    </header>

  </span>
  <form action="Consultar.php">
                  <button id="cons">Resultados anteriores</button>
                </form>
  
  <span>
    <center>

      <table >

        <tr>
          <td class="num">1</td>
          <td>¿Aceptarías trabajar escribiendo artículos en la sección de economía de un diario? </td>
          
        </tr>

        <tr>
          <td class="num">2</td>
          <td>¿Te ofrecerías para organizar la despedida de soltero/s de uno de tus amigos? </td>
        </tr>

        <tr>
          <td class="num">3</td>
          <td>¿Te gustaría dirigir un proyecto de urbanización en tu lugar de residencia? </td>
        </tr>

        <tr>
          <td class="num">4</td>
          <td>¿A una frustración siempre opones un pensamiento positivo? </td>
        </tr>

        <tr>
          <td class="num">5</td>
          <td>¿Te dedicarías a socorrer a personas accidentadas o atacadas por asaltantes? </td>
        </tr>

        <tr>
          <td class="num">6</td>
          <td>Cuándo eras chico ¿te interesaba saber como estaban construidos tus juguetes? </td>
        </tr>

        <tr>
          <td class="num">7</td>
          <td>¿Te interesan más los misterios de la naturaleza que los secretos de la tecnología? </td>
        </tr>

        <tr>
          <td class="num">8</td>
          <td>¿Escuchas atentamente los problemas que te plantean tus amigos? </td>
        </tr>

        <tr>
          <td class="num">9</td>
          <td>¿Te ofrecerías para explicarle a tus compañeros un tema que ellos no entendieron? </td>
        </tr>

        <tr>
          <td class="num">10</td>
          <td>¿Eres exigente y crítico con tu equipo de trabajo? </td>
        </tr>

        <tr>
          <td class="num">11</td>
          <td>¿Te atrae armar rompecabezas? </td>
        </tr>

        <tr>
          <td class="num">12</td>
          <td>¿Sabes la diferencia conceptual entre macroeconomía y microeconomía? </td>
        </tr>

        <tr>
          <td class="num">13</td>
          <td>Usar uniforme, ¿Te hace sentir distinto, importante? </td>
        </tr>

        <tr>
          <td class="num">14</td>
          <td>¿Participarías como profesional en un espectáculo de acrobacia aérea? </td>
        </tr>

        <tr>
          <td class="num">15</td>
          <td>¿Organizas tu dinero de modo que te alcance para lo que debes hacer con él? </td>
        </tr>

        <tr>
          <td class="num">16</td>
          <td>¿Convences fácilmente a otras personas sobre la validez de tus argumentos? </td>
        </tr>

        <tr>
          <td class="num">17</td>
          <td>¿Estás informado sobre los últimos descubrimientos científicos? </td>
        </tr>

        <tr>
          <td class="num">18</td>
          <td>Ante una situación de emergencia, ¿Actúas rápidamente? </td>
        </tr>

        <tr>
          <td class="num">19</td>
          <td>Cuando tienes que resolver un problema matemático ¿Perseveras hasta encontrar la solución? </td>
        </tr>

        <tr>
          <td class="num">20</td>
          <td>Si te convocara tu club preferido para planificar, organizar y dirigir un campo deportivo ¿Aceptarías?
          </td>
        </tr>

        <tr>
          <td class="num">21</td>
          <td>¿Eres el que pone un toque de alegría en las fiestas? </td>
        </tr>

        <tr>
          <td class="num">22</td>
          <td>¿Crees que los detalles son tan importantes como el todo? </td>
        </tr>

        <tr>
          <td class="num">23</td>
          <td>¿Te sentirías a gusto trabajando en un ámbito hospitalario? </td>
        </tr>

        <tr>
          <td class="num">24</td>
          <td>¿Te gustaría participar para mantener el orden en grandes desordenes o catástrofes? </td>
        </tr>

        <tr>
          <td class="num">25</td>
          <td>¿Pasarías varias horas leyendo un libro de tu interés? </td>
        </tr>

        <tr>
          <td class="num">26</td>
          <td>¿Planificas detalladamente tus trabajos antes de empezar? </td>
        </tr>

        <tr>
          <td class="num">27</td>
          <td>¿Entablas una relación casi personal con tu computadora? </td>
        </tr>

        <tr>
          <td class="num">28</td>
          <td>¿Disfrutarías modelar arcilla? </td>
        </tr>

        <tr>
          <td class="num">29</td>
          <td>¿Ayudas a no videntes habitualmente a cruzar la calle? </td>
        </tr>

        <tr>
          <td class="num">30</td>
          <td>¿Consideras importante que desde la escuela primaria se fomente la actitud crítica y la participación
            activa? </td>
        </tr>

        <tr>
          <td class="num">31</td>
          <td>¿Te parece bien que las mujeres formen parte de las fuerzas armadas bajo las mismas condiciones que los
            hombres? </td>
        </tr>

        <tr>
          <td class="num">32</td>
          <td>¿Te gustaría crear nuevas técnicas para descubrir las enfermedades a través del microscopio? </td>
        </tr>

        <tr>
          <td class="num">33</td>
          <td>¿Participarías en una campaña de prevención de la enfermedad del Dengue? </td>
        </tr>

        <tr>
          <td class="num">34</td>
          <td>¿Te interesan los temas relacionados al pasado y el progreso de la humanidad? </td>
        </tr>

        <tr>
          <td class="num">35</td>
          <td>¿Te incluirías en un proyecto de investigación de los movimientos sísmicos y sus consecuencias? </td>
        </tr>

        <tr>
          <td class="num">36</td>
          <td>Fuera de los horarios escolares ¿dedicas algún tiempo a actividades corporales? </td>
        </tr>

        <tr>
          <td class="num">37</td>
          <td>¿Te interesan las actividades de mucha acción y de reacción rápida en situaciones imprevistas de peligro?
          </td>
        </tr>

        <tr>
          <td class="num">38</td>
          <td>¿Te ofrecerías para colaborar como voluntarios en los laboratorios especiales de la NASA? </td>
        </tr>

        <tr>
          <td class="num">39</td>
          <td>¿Te gusta más el trabajo manual que el trabajo intelectual? </td>
        </tr>

        <tr>
          <td class="num">40</td>
          <td>¿Estarías dispuesto a renunciar a un momento placentero por ofrecer tu servicio como profesional? </td>
        </tr>

        <tr>
          <td class="num">41</td>
          <td>¿Te ofrecerías para explicarle a tus compañeros un tema que ellos no entendieron? </td>
        </tr>

        <tr>
          <td class="num">42</td>
          <td>¿Eres exigente y crítico con tu equipo de trabajo? </td>
        </tr>

        <tr>
          <td class="num">43</td>
          <td>¿Te atrae armar rompecabezas? </td>
        </tr>

        <tr>
          <td class="num">44</td>
          <td>¿Sabes la diferencia conceptual entre macroeconomía y microeconomía? </td>
        </tr>

        <tr>
          <td class="num">45</td>
          <td>Usar uniforme, ¿Te hace sentir distinto, importante? </td>
        </tr>

        <tr>
          <td class="num">46</td>
          <td>¿Participarías como profesional en un espectáculo de acrobacia aérea? </td>
        </tr>

        <tr>
          <td class="num">47</td>
          <td>¿Organizas tu dinero de modo que te alcance para lo que debes hacer con él? </td>
        </tr>

        <tr>
          <td class="num">48</td>
          <td>¿Convences fácilmente a otras personas sobre la validez de tus argumentos? </td>
        </tr>

        <tr>
          <td class="num">49</td>
          <td>¿Aceptarías trabajar escribiendo artículos en la sección de economía de un diario? </td>
        </tr>

        <tr>
          <td class="num">50</td>
          <td>¿Te ofrecerías para organizar la despedida de soltero/s de uno de tus amigos? </td>
        </tr>

        <tr>
          <td class="num">51</td>
          <td>¿Te gustaría dirigir un proyecto de urbanización en tu lugar de residencia? </td>
        </tr>

        <tr>
          <td class="num">52</td>
          <td>¿A una frustración siempre opones un pensamiento positivo? </td>
        </tr>

        <tr>
          <td class="num">53</td>
          <td>¿Te dedicarías a socorrer a personas accidentadas o atacadas por asaltantes? </td>
        </tr>

        <tr>
          <td class="num">54</td>
          <td>Cuándo eras chico ¿te interesaba saber como estaban construidos tus juguetes? </td>
        </tr>

        <tr>
          <td class="num">55</td>
          <td>¿Te interesan más los misterios de la naturaleza que los secretos de la tecnología? </td>
        </tr>

        <tr>
          <td class="num">56</td>
          <td>¿Escuchas atentamente los problemas que te plantean tus amigos? </td>
        </tr>

        <tr>
          <td class="num">57</td>
          <td>¿Te ofrecerías para explicarle a tus compañeros un tema que ellos no entendieron? </td>
        </tr>

        <tr>
          <td class="num">58</td>
          <td>¿Eres exigente y crítico con tu equipo de trabajo? </td>
        </tr>

        <tr>
          <td class="num">59</td>
          <td>¿Te atrae armar rompecabezas? </td>
        </tr>

        <tr>
          <td class="num">60</td>
          <td>¿Sabes la diferencia conceptual entre macroeconomía y microeconomía? </td>
        </tr>

        <tr>
          <td class="num">61</td>
          <td>Usar uniforme, ¿Te hace sentir distinto, importante? </td>
        </tr>

        <tr>
          <td class="num">62</td>
          <td>¿Participarías como profesional en un espectáculo de acrobacia aérea? </td>
        </tr>

        <tr>
          <td class="num">63</td>
          <td>¿Organizas tu dinero de modo que te alcance para lo que debes hacer con él? </td>
        </tr>

        <tr>
          <td class="num">64</td>
          <td>¿Convences fácilmente a otras personas sobre la validez de tus argumentos? </td>
        </tr>

        <tr>
          <td class="num">65</td>
          <td>¿Aceptarías trabajar escribiendo artículos en la sección de economía de un diario? </td>
        </tr>

        <tr>
          <td class="num">66</td>
          <td>¿Te ofrecerías para organizar la despedida de soltero/s de uno de tus amigos? </td>
        </tr>

        <tr>
          <td class="num">67</td>
          <td>¿Te gustaría dirigir un proyecto de urbanización en tu lugar de residencia? </td>
        </tr>

        <tr>
          <td class="num">68</td>
          <td>¿A una frustración siempre opones un pensamiento positivo? </td>
        </tr>

        <tr>
          <td class="num">69</td>
          <td>¿Te dedicarías a socorrer a personas accidentadas o atacadas por asaltantes? </td>
        </tr>

        <tr>
          <td class="num">70</td>
          <td>Cuándo eras chico ¿te interesaba saber como estaban construidos tus juguetes? </td>
        </tr>

        <tr>
          <td class="num">71</td>
          <td>¿Te interesan más los misterios de la naturaleza que los secretos de la tecnología? </td>
        </tr>

        <tr>
          <td class="num">72</td>
          <td>¿Escuchas atentamente los problemas que te plantean tus amigos? </td>
        </tr>

        <tr>
          <td class="num">73</td>
          <td>¿Te ofrecerías para explicarle a tus compañeros un tema que ellos no entendieron? </td>
        </tr>

        <tr>
          <td class="num">74</td>
          <td>¿Eres exigente y crítico con tu equipo de trabajo? </td>
        </tr>

        <tr>
          <td class="num">75</td>
          <td>¿Te atrae armar rompecabezas? </td>
        </tr>

        <tr>
          <td class="num">76</td>
          <td>¿Sabes la diferencia conceptual entre macroeconomía y microeconomía? </td>
        </tr>

        <tr>
          <td class="num">77</td>
          <td>Usar uniforme, ¿Te hace sentir distinto, importante? </td>
        </tr>

        <tr>
          <td class="num">78</td>
          <td>¿Participarías como profesional en un espectáculo de acrobacia aérea? </td>
        </tr>

        <tr>
          <td class="num">79</td>
          <td>¿Organizas tu dinero de modo que te alcance para lo que debes hacer con él? </td>
        </tr>

        <tr>
          <td class="num">80</td>
          <td>¿Convences fácilmente a otras personas sobre la validez de tus argumentos? </td>
        </tr>

        <tr>
          <td class="num">81</td>
          <td>¿Aceptarías trabajar escribiendo artículos en la sección de economía de un diario? </td>
        </tr>

        <tr>
          <td class="num">82</td>
          <td>¿Te ofrecerías para organizar la despedida de soltero/s de uno de tus amigos? </td>
        </tr>

        <tr>
          <td class="num">83</td>
          <td>¿Te gustaría dirigir un proyecto de urbanización en tu lugar de residencia? </td>
        </tr>

        <tr>
          <td class="num">84</td>
          <td>¿A una frustración siempre opones un pensamiento positivo? </td>
        </tr>

        <tr>
          <td class="num">85</td>
          <td>¿Te dedicarías a socorrer a personas accidentadas o atacadas por asaltantes? </td>
        </tr>

        <tr>
          <td class="num">86</td>
          <td>Cuándo eras chico ¿te interesaba saber como estaban construidos tus juguetes? </td>
        </tr>

        <tr>
          <td class="num">87</td>
          <td>¿Te interesan más los misterios de la naturaleza que los secretos de la tecnología? </td>
        </tr>

        <tr>
          <td class="num">88</td>
          <td>¿Escuchas atentamente los problemas que te plantean tus amigos? </td>
        </tr>

        <tr>
          <td class="num">89</td>
          <td>¿Te ofrecerías para explicarle a tus compañeros un tema que ellos no entendieron? </td>
        </tr>

        <tr>
          <td class="num">90</td>
          <td>¿Eres exigente y crítico con tu equipo de trabajo? </td>
        </tr>

        <tr>
          <td class="num">91</td>
          <td>¿Te atrae armar rompecabezas? </td>
        </tr>

        <tr>
          <td class="num">92</td>
          <td>¿Sabes la diferencia conceptual entre macroeconomía y microeconomía? </td>
        </tr>

        <tr>
          <td class="num">93</td>
          <td>Usar uniforme, ¿Te hace sentir distinto, importante? </td>
        </tr>

        <tr>
          <td class="num">94</td>
          <td>¿Participarías como profesional en un espectáculo de acrobacia aérea? </td>
        </tr>

        <tr>
          <td class="num">95</td>
          <td>¿Organizas tu dinero de modo que te alcance para lo que debes hacer con él? </td>
        </tr>

        <tr>
          <td class="num">96</td>
          <td>¿Convences fácilmente a otras personas sobre la validez de tus argumentos? </td>
        </tr>

        <tr>
          <td class="num">97</td>
          <td>¿Organizas tu dinero de modo que te alcance para lo que debes hacer con él? </td>
        </tr>

        <tr>
          <td class="num">98</td>
          <td>¿Convences fácilmente a otras personas sobre la validez de tus argumentos? </td>
        </tr>
      </table>
      <p>---------------------------------------------------------------------------------------------</p>
      <div class="content">
        
       
        <label class="label" for="input-texto">INTERESES</label>
        <label class="label2" for="input-texto">APTITUDES</label>
      <table class="tabla">

        <tr>
          <td class="chaside">C</td>
          <td class="chaside">H</td>
          <td class="chaside">A</td>
          <td class="chaside">S</td>
          <td class="chaside">I</td>
          <td class="chaside">D</td>
          <td class="chaside">E</td>
        
        </tr>
        <tr>
      <form action="post.php" method="post"> 

          
          <td><label class="container">98<input type="checkbox" name="98" id="98" onclick="live(event.target,'c1') " ><span
                class="checkmark"></span></label></td>
          <td><label class="container">9<input type="checkbox" id="9" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">21<input type="checkbox" id="21" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">33<input type="checkbox" id="33" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">75<input type="checkbox" id="75" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">84<input type="checkbox" id="84" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">77<input type="checkbox" id="77" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
        </tr>
        <tr>
          <td><label class="container">12<input type="checkbox" id="12" onclick="live(event.target,'c1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">34<input type="checkbox" id="34" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">45<input type="checkbox" id="45" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">92<input type="checkbox" id="92" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">6<input type="checkbox" id="6" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">31<input type="checkbox" id="31" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">42<input type="checkbox" id="42" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
        </tr>
        <tr >
          <td><label class="container">64<input type="checkbox" id="64" onclick="live(event.target,'c1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">80<input type="checkbox" id="80" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">96<input type="checkbox" id="96" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">70<input type="checkbox" id="70" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">19<input type="checkbox" id="19" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">48<input type="checkbox" id="48" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">88<input type="checkbox" id="88" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
               

                

         
            
        </tr>
        <tr>
          <td><label class="container">53<input type="checkbox" id="53" onclick="live(event.target,'c1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">25<input type="checkbox" id="25" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">57<input type="checkbox" id="57" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">8<input type="checkbox" id="8" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">38<input type="checkbox" id="38" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">73<input type="checkbox" id="73" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">17<input type="checkbox" id="17" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
        </tr>
        <tr>
          <td><label class="container">85<input type="checkbox" id="85" onclick="live(event.target,'c1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">95<input type="checkbox" id="95" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">28<input type="checkbox" id="28" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">87<input type="checkbox" id="87" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">60<input type="checkbox" id="60" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">5<input type="checkbox" id="5" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">93<input type="checkbox" id="93" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
        </tr>

        <tr>
          <td><label class="container">1<input type="checkbox" id="1" onclick="live(event.target,'c1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">67<input type="checkbox" id="67" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">11<input type="checkbox" id="11" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">62<input type="checkbox" id="62" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">27<input type="checkbox" id="27" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">65<input type="checkbox" id="65" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">32<input type="checkbox" id="32" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
          <td class="chaside">C</td>
          <td class="chaside">H</td>
          <td class="chaside">A</td>
          <td class="chaside">S</td>
          <td class="chaside">I</td>
          <td class="chaside">D</td>
          <td class="chaside">E</td>
          
        </tr>
        <tr>
          <td><label class="container">78<input type="checkbox" id="78" onclick="live(event.target,'c1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">41<input type="checkbox" id="41" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">50<input type="checkbox" id="50" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">23<input type="checkbox" id="23" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">83<input type="checkbox" id="83" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">14<input type="checkbox" id="14" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">68<input type="checkbox" id="68" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">15<input type="checkbox" id="15" onclick="live(event.target,'c2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">63<input type="checkbox" id="63" onclick="live(event.target,'h2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">22<input type="checkbox" id="22" onclick="live(event.target,'a2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">69<input type="checkbox" id="69" onclick="live(event.target,'s2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">26<input type="checkbox" id="26" onclick="live(event.target,'i2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">13<input type="checkbox" id="13" onclick="live(event.target,'d2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">94<input type="checkbox" id="94" onclick="live(event.target,'e2')"><span
                class="checkmark"></span></label></td>
        </tr>
        <tr>
          <td><label class="container">20<input type="checkbox" id="20" onclick="live(event.target,'c1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">74<input type="checkbox" id="74" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">3<input type="checkbox" id="3" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">44<input type="checkbox" id="44" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">54<input type="checkbox" id="54" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">37<input type="checkbox" id="37" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">49<input type="checkbox" id="49" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">51<input type="checkbox" id="51" onclick="live(event.target,'c2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">30<input type="checkbox" id="30" onclick="live(event.target,'h2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">39<input type="checkbox" id="39" onclick="live(event.target,'a2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">40<input type="checkbox" id="40" onclick="live(event.target,'s2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">59<input type="checkbox" id="59" onclick="live(event.target,'i2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">66<input type="checkbox" id="66" onclick="live(event.target,'d2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">7<input type="checkbox" id="7" onclick="live(event.target,'e2')"><span
                class="checkmark"></span></label></td>
        </tr>
        <tr>
          <td><label class="container">71<input type="checkbox" id="71" onclick="live(event.target,'c1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">56<input type="checkbox" id="56" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">81<input type="checkbox" id="81" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">16<input type="checkbox" id="16" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">47<input type="checkbox" id="47" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">58<input type="checkbox" id="58" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">35<input type="checkbox" id="35" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">2<input type="checkbox" id="2" onclick="live(event.target,'c2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">72<input type="checkbox" id="72" onclick="live(event.target,'h2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">76<input type="checkbox" id="76" onclick="live(event.target,'a2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">29<input type="checkbox" id="29" onclick="live(event.target,'s2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">90<input type="checkbox" id="90" onclick="live(event.target,'i2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">18<input type="checkbox" id="18" onclick="live(event.target,'d2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">79<input type="checkbox" id="79" onclick="live(event.target,'e2')"><span
                class="checkmark"></span></label></td>
        </tr>
        <tr>
          <td><label class="container">91<input type="checkbox" id="91" onclick="live(event.target,'c1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">89<input type="checkbox" id="89" onclick="live(event.target,'h1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">36<input type="checkbox" id="36" onclick="live(event.target,'a1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">52<input type="checkbox" id="52" onclick="live(event.target,'s1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">97<input type="checkbox" id="97" onclick="live(event.target,'i1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">24<input type="checkbox" id="24" onclick="live(event.target,'d1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">61<input type="checkbox" id="61" onclick="live(event.target,'e1')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">46<input type="checkbox" id="46" onclick="live(event.target,'c2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">86<input type="checkbox" id="86" onclick="live(event.target,'h2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">82<input type="checkbox" id="82" onclick="live(event.target,'a2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">4<input type="checkbox" id="4" onclick="live(event.target,'s2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">10<input type="checkbox" id="10" onclick="live(event.target,'i2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">43<input type="checkbox" id="43" onclick="live(event.target,'d2')"><span
                class="checkmark"></span></label></td>
          <td><label class="container">55<input type="checkbox" id="55" onclick="live(event.target,'e2')"><span
                class="checkmark"></span></label></td>
       </form>
        </tr>
        <tr>
          <td><label class="container" id="c1R"> </label></td>
          <td><label class="container" id="h1R"> </label></td>
          <td><label class="container" id="a1R"> </label></td>
          <td><label class="container" id="s1R"> </label></td>
          <td><label class="container" id="i1R"> </label></td>
          <td><label class="container" id="d1R"> </label></td>
          <td><label class="container" id="e1R"> </label></td> 
          <td><label class="container" id="c2R"> </label></td>
          <td><label class="container" id="h2R"> </label></td>
          <td><label class="container" id="a2R"> </label></td>
          <td><label class="container" id="s2R"></label></td>
          <td><label class="container" id="i2R"> </label></td>
          <td><label class="container" id="d2R"> </label></td>
          <td><label class="container" id="e2R"> </label></td>
        </tr>

      </table>
    </div>
      <input type="submit" onclick="resultado()" value="Ver resultados">




    </center>
  </span>
</body>

</html>