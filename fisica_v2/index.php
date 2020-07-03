<!DOCTYPE html>

<!-- Provided By ESPE -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/ejercicios.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Ley de Snell</title>
  </head>
  <body>
    <div class="contenedor_padre">
      <nav id="encabezado">
        <img src="images/logo.png" alt="logo_espe">
        <div class="titulo">
          Reflexion y refraccion
          <p id="name">Danny Monroy</p>
          <p></p>
        </div>

      </nav>
      <div class="cuerpo">
        <div class="explicacion">

          <h4>Reflexion</h4>
          <p>Cuando la luz indide sobre un objeto una parte de esta se refleja, si este objeto es transparente como el vidrio o el agua
          una parte de la luz puede viajar a traves de este, en angulo con el que lal uz cae sobre el objeto originalemtente se denomina
          angulo de incidencia y al reflejarse se forma un nuevo angulo denominado angulo de reflexion.</p>

          <h4>Espejos</h4>
          <p>Al pararnos frente a un espejo plano notamos que nuestro reflejo es del mismo tamaño que nostros, esto puesto a que no
          no existe amplificacion de ningun tipo, esto es diferente al hablar de espejos esféricos.</p>
          <img src="images/info.png" alt="espejos" class="ex_img">
          <p>mueve el cursor en la imagen para agrandar</p>
          <h5>Foco y radio</h5>
          <img src="images/foco_radio.png" alt="foco espejo">
          <p class="ecuacion">\( f=\frac{r}{2} \), donde f es la distancia focal del espejo y r el radio de curvatura</p>
          <h5>Ecuación del espejo</h5>
          <img width="40%" src="images/ec_espejos.png" alt="ec_espejos">
          <p class="ecuacion">\( \frac{1}{d_{0}} + \frac{1}{d_{1}} = \frac{1}{f} \)</p>

          <button type="button" name="demostracion_1" onclick="demostracion(1)">Mostrar demostracion</button>
          <div id="demostracion_1" class="demostracion">
            <p>Siguiendo la imagen sabemos que la altura de la imagen es proporcional a la distancia de la imagen y
            esta a su ves a la distancia del objeto:</p>
            <p class="ecuacion"> \( \frac{h_{0}}{h_{i}} = \frac{d_{0}}{d_{i}} \) </p>
            <p>En los triangulos \( O^{'}FO\) y \(ABF \) Obtenemos que:</p>
            <p class="ecuacion"> \( \frac{h_{0}}{h_{i}} = \frac{OF}{FA} = \frac{d_{o}-f}{f} \) </p>
            <p>Y:</p>
            <p class="ecuacion"> \( \frac{d_{0}}{d_{i}} = \frac{d_{o}-f}{f} \) </p>
            <p>Dividiendo ambos lados entre \(d_{o}\)</p>
            <p class="ecuacion">\( \frac{1}{d_{0}} + \frac{1}{d_{1}} = \frac{1}{f} \)</p>
            <button type="button" name="button" onclick="ocultar(1)">ocultar</button>
          </div>

          <h4>amplificacion </h4>
          <p>La amplificacion lateral m se define cono la relacion entre la altura del objeto y la altura de la imagen</p>
          <p class="ecuacion"> \( m = \frac{h_{i}}{h_{0}} = \frac{-d_{i}}{d_{0}} \) </p>
          <h3>Simulador de espejos - Geogebra</h3>
          <p> Visita el Simulador en la pagina oficial de <a href="https://www.geogebra.org/m/dEz6TBKN" target="_blank"> Geogebra</a> </p>
          <p>Autor: <a href="https://www.geogebra.org/u/josechecal98" target="_blank">josechecal98</a></p>
          <hr>
          <iframe scrolling="no" src="iframe/espejos_simulator/index.html" width="100%" style="border:0px;" allowfullscreen></iframe>
          <hr>

          <h4>Convención de Signos</h4>
          <ul>
            <li>Cuando el objeto, la imagen o el punto focal se encuentran del lado reflejante del espejo la
            distancia es positiva, si se hallan detras de el espejo, la distancia es negativa</li>
            <li>La altura de la imagen \( h_{i} \) es positiva si la imagen esta derecha y negativa si se halla
              invertida en relacion al objeto, \( h_{o}\) siempre se concidera positiva</li>
          </ul>



          <h4>Indice de refracción</h4>
          <p>Es la relacion entre la velocidad de un rayo en el vacio y la velocidad del mismo en un material,
          por lo que se lo conoce como la constante de oposicion al paso de la luz</p>
          <p class="ecuacion"> \( n=\frac{c}{v} \) donde n es el indice de refraccion, c la velocidad de la luz en el vacio y v la velocidad
          del rayo en el objeto </p>
          <button type="button" name="button" onclick="demostracion(2)">Tabla de indices de refraccion</button>
          <div class="demostracion" id="demostracion_2">
            <img src="images/indices.jpg" alt="indices de refraccion">
            <br>
            <button type="button" name="button" onclick="ocultar(2)">ocultar</button>
          </div>

          <h4>Refracción</h4>
          <p>Cuando la luz pasa de un medio transparente a otro con un índice de refracción diferente,
            parte de la luz incidente se refleja en la frontera. El resto pasa hacia el nuevo
            medio. Si un rayo de luz incide en un ángulo con la superficie (de manera que no sean
            perpendiculares), el rayo cambia de dirección conforme entra al nuevo medio. Este
            cambio en dirección, o desviación, se llama refracción</p>

          <h4>La ley de Snell</h4>
          <p>El ángulo de refracción depende de la rapidez de la luz en los dos medios y del ángulo
          de incidencia. Esto fue postulado por Willebrord Snell quien llegó experimentalmente a la
          relación analítica entre el angulo de incidencia y el angulo reflectivo que se representa en la
          <strong>ley de snell</strong>:</p>
          \( n_{1} * \sin \theta_{i} = n_{1} * \sin \theta_{r} \)
          <p>donde n1 y n2 son los respectivos indices de refraccion en los materiales</p>
          <p>De mismo modo por la relación de los indices de refracción con la velocidad de los materiales tenemos que: </p>
          <p class="ecuacion"> \( \frac{v_{1}}{\sin\theta_{i}} = \frac{v_{2}}{\sin\theta_{r}} \) </p>

          <p><strong>Reflexion Total</strong></p>
          <ul>
            <li>Si \(v_{1} > v_{2}\) el rayo refractado se acerca a la normal</li>
            <li>Si \(v_{1} < v_{2}\) el rayo refractado se aleja de la normal</li>
          </ul>
          Tras esto, nos referimos a reflexion total cuando el segundo angulo es igual a &#960;/2 <br>
          <img src="images/refraction.gif" alt="refraccion">
        </div>

        <!-- -f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f-f- -->
        <div class="juego_ejercicios">
          <div class="titulo_ejercicios">
            <p style="font-size:20px;text-align:center;"> Demuestra lo aprendido</p>

            <p>A continuacion se mostraran 8 ejercicios referentes a la ley de snell, el jugador empezará
            con 80 puntos, fallar un ejercicio reducira 10 puntos, al final podra observar la solucion de cada uno y publicar su puntaje.</p>
          </div>



          <div id="banco_ejercicios">

            <div id="ejercicio_1" class="ocultar">
              <div class="planteamiento">
                1)Se dice que Arquímedes quemó toda la flota romana en el
                puerto de Siracusa al enfocar los rayos del Sol con un enorme
                espejo esférico. ¿Es esto razonable? <br/>
              </div>
              <div class="opciones">
                  <input type="radio" name="respuesta_1" value="1">Si
                  <input type="radio" name="respuesta_1" value="0">No
                  <input type="radio" name="respuesta_1" value="5">Solo si lo hace de dia
                  <input type="radio" name="respuesta_1" value="6">Quien es Arquimedes?
                  <p>
                    <button type="button" name="enviar" onclick="resp(1)">enviar</button>
                  </p>
              </div>
              <div class="correcto_incorrecto">
                <p class="CORRECTO">CORRECTO</p>
                <p class="INCORRECTO">INCORRECTO</p>
                <button type="button" name="show_solution" disabled onclick="show_solved(1)">Mostrar solucion</button>
              </div>
              <div class="imagen_respuesta">
                <div class="respuesta">
                  <p>Si podria ser posible, aunque ciertamente muy dificil, Arquimedes habria necesitado
                  un espejo esferico gigante y los botes enemigos quietos hasta que la luz solar lograra
                  calentar la madera</p>
                    <img src="images/exp_1.jpg" alt="ejercicio_1" class="solved">
                </div>
              </div>
              <div class="btn_continuar">
                <button type="button" name="button" onclick="siguiente(2)">siguiente</button>
              </div>
            </div>

            <!-- EJERCICIO 2 -->
            <!-- EJERCICIO 2 -->
            <!-- EJERCICIO 2 -->
            <!-- EJERCICIO 2 -->
            <div id="ejercicio_2" class="ocultar">
              <div class="planteamiento">
                2) ¿Cuál es la amplificación de un espejo plano? <br/>
              </div>
              <div class="opciones">
                  <input type="radio" name="respuesta_2" value="2">2
                  <input type="radio" name="respuesta_2" value="0">0
                  <input type="radio" name="respuesta_2" value="1">1
                  <input type="radio" name="respuesta_2" value="-1">-1
                  <p>
                    <button type="button" name="enviar" onclick="resp(2)">enviar</button>
                  </p>
              </div>
              <div class="correcto_incorrecto">
                <p class="CORRECTO">CORRECTO</p>
                <p class="INCORRECTO">INCORRECTO</p>
                <button type="button" name="show_solution" disabled onclick="show_solved(2)">Mostrar solucion</button>
              </div>
              <div class="imagen_respuesta">
                <div class="respuesta">
                  <p>Un espejo plano no genera amplificacion por lo que di=do, entonces m=d1/do=1</p>
                  <img src="images/exp_2.png" alt="ejercicio_1" class="solved">
                </div>
              </div>
              <div class="btn_continuar">
                <button type="button" name="button" onclick="siguiente(3)">siguiente</button>
              </div>
            </div>

            <!-- EJERCICIO 3 -->
            <!-- EJERCICIO 3 -->
            <!-- EJERCICIO 3 -->
            <!-- EJERCICIO 3 -->
            <div id="ejercicio_3" class="ocultar">
              <div class="planteamiento">
                3)¿Cuál de las siguientes expresiones representa correctamente un espejo plano? <br/>
              </div>
              <div class="opciones">
                  <input type="radio" name="respuesta_3" value="10">\( \frac{1}{d_{0}} + \frac{1}{d_{1}} = 1 \)
                  <input type="radio" name="respuesta_3" value="1">\( \frac{1}{d_{0}} - \frac{1}{d_{1}} = 1 \)
                  <input type="radio" name="respuesta_3" value="0">\( \frac{1}{d_{0}} + \frac{1}{d_{1}} = 0 \)
                  <input type="radio" name="respuesta_3" value="-1">\( \frac{1}{f} - \frac{1}{d_{1}} = -1 \)
                  <p>
                    <button type="button" name="enviar" onclick="resp(3)">enviar</button>
                  </p>
              </div>
              <div class="correcto_incorrecto">
                <p class="CORRECTO">CORRECTO</p>
                <p class="INCORRECTO">INCORRECTO</p>
                <button type="button" name="show_solution" disabled onclick="show_solved(3)">Mostrar solucion</button>
              </div>
              <div class="imagen_respuesta">
                <div class="respuesta">
                  <p>ya que la amplificacion lateral de las imagenes en un espejo plano es de 1, entonces
                  \(d_{0}=-d_{1}\)</p>

                </div>
              </div>
              <div class="btn_continuar">
                <button type="button" name="button" onclick="siguiente(4)">siguiente</button>
              </div>
            </div>

            <!-- EJERCICIO 4 -->
            <!-- EJERCICIO 4 -->
            <!-- EJERCICIO 4 -->
            <!-- EJERCICIO 4 -->
            <div id="ejercicio_4" class="ocultar">
              <div class="planteamiento">
                4)Si un espejo cóncavo produce una imagen real, ¿la imagen necesariamente está invertida? <br/>
              </div>
              <div class="opciones">
                  <input type="radio" name="respuesta_4" value="1">si
                  <input type="radio" name="respuesta_4" value="0">no
                  <input type="radio" name="respuesta_4" value="3">a veces
                  <input type="radio" name="respuesta_4" value="5">casi siempre
                  <p>
                    <button type="button" name="enviar" onclick="resp(4)">enviar</button>
                  </p>
              </div>
              <div class="correcto_incorrecto">
                <p class="CORRECTO">CORRECTO</p>
                <p class="INCORRECTO">INCORRECTO</p>
                <button type="button" name="show_solution" disabled onclick="show_solved(4)">Mostrar solucion</button>
              </div>
              <div class="imagen_respuesta">
                <div class="respuesta">
                  <p>Cuando un espejo concavo produce una imagen real, entonces d0 y d1 serán positivas
                  por lo que la amplificacion lateral será negativa lo que indica que la imagen estará invertida</p>
                  <img src="images/exp_4.jpg" alt="ejercicio_1" class="solved">
                </div>
              </div>
              <div class="btn_continuar">
                <button type="button" name="button" onclick="siguiente(5)">siguiente</button>
              </div>
            </div>

            <!-- EJERCICIO 5 -->
            <!-- EJERCICIO 5 -->
            <!-- EJERCICIO 5 -->
            <!-- EJERCICIO 5 -->
            <div id="ejercicio_5" class="ocultar">
              <div class="planteamiento">
                5) Que tipo de espejo se muestra en la figura? <br/>
                <img src="images/ejer_5.jpg" alt="espejo_convexo">
              </div>
              <div class="opciones">
                  <input type="radio" name="respuesta_5" value="1">convexo
                  <input type="radio" name="respuesta_5" value="2">divergente
                  <input type="radio" name="respuesta_5" value="3">concavo
                  <input type="radio" name="respuesta_5" value="4">de vidrio
                  <p>
                    <button type="button" name="enviar" onclick="resp(5)">enviar</button>
                  </p>
              </div>
              <div class="correcto_incorrecto">
                <p class="CORRECTO">CORRECTO</p>
                <p class="INCORRECTO">INCORRECTO</p>
                <button type="button" name="show_solution" disabled onclick="show_solved(5)">Mostrar solucion</button>
              </div>
              <div class="imagen_respuesta">
                <div class="respuesta">
                  <p>El espejo convexo o divergente refleja los rayos los cuales se unen reflejando
                  una imagen de menor tamaño a diferencia del concavo cuya imagen se agranda</p>
                  <img src="images/exp_5.jpg" alt="ejercicio_1" class="solved">
                </div>
              </div>
              <div class="btn_continuar">
                <button type="button" name="button" onclick="siguiente(6)">siguiente</button>
              </div>
            </div>

            <!-- EJERCICIO 6 -->
            <!-- EJERCICIO 6 -->
            <!-- EJERCICIO 6 -->
            <!-- EJERCICIO 6 -->
            <div id="ejercicio_6" class="ocultar">
              <div class="planteamiento">
                6) Si usted observa un objeto que se encuentra en el aire, y usted se encuenta debajo del agua
                el tamaño de este objeto sera? <br/>
              </div>
              <div class="opciones">
                  <input type="radio" name="respuesta_6" value="1">mayor
                  <input type="radio" name="respuesta_6" value="2">igual
                  <input type="radio" name="respuesta_6" value="3">menor
                  <input type="radio" name="respuesta_6" value="4">la luz no viaja a traves del agua
                  <p>
                    <button type="button" name="enviar" onclick="resp(6)">enviar</button>
                  </p>
              </div>
              <div class="correcto_incorrecto">
                <p class="CORRECTO">CORRECTO</p>
                <p class="INCORRECTO">INCORRECTO</p>
                <button type="button" name="show_solution" disabled onclick="show_solved(6)">Mostrar solucion</button>
              </div>
              <div class="imagen_respuesta">
                <div class="respuesta">
                  <p>Ademas de la lus reflejada al entrar en el medio del agua, el indice de refraccion mas alto
                  que el del aire disminuye el ángulo entre el haz de luz y la normal, por lo que el tamaño del objeto
                se reduce</p>
                  <img src="images/exp_6.jpg" alt="ejercicio_1" class="solved">
                </div>
              </div>
              <div class="btn_continuar">
                <button type="button" name="button" onclick="siguiente(7)">Siguiente</button>
              </div>
            </div>

            <!-- EJERCICIO 7 -->
            <!-- EJERCICIO 7 -->
            <!-- EJERCICIO 7 -->
            <!-- EJERCICIO 7 -->
            <div id="ejercicio_7" class="ocultar">
              <div class="planteamiento">
                7) Para Corregir la miopia, los optómetras usan lentes de potencias negativas, de esta forma
                logran  enfocar objetos a la distancia, siendo este el caso, que tipo de lentes se usarán??<br/>
              </div>
              <div class="opciones">
                  <input type="radio" name="respuesta_7" value="1">divergentes
                  <input type="radio" name="respuesta_7" value="2">planos
                  <input type="radio" name="respuesta_7" value="3">convergentes
                  <input type="radio" name="respuesta_7" value="4">senoidales
                  <p>
                    <button type="button" name="enviar" onclick="resp(7)">enviar</button>
                  </p>
              </div>
              <div class="correcto_incorrecto">
                <p class="CORRECTO">CORRECTO</p>
                <p class="INCORRECTO">INCORRECTO</p>
                <button type="button" name="show_solution" disabled onclick="show_solved(7)">Mostrar solucion</button>
              </div>
              <div class="imagen_respuesta">
                <div class="respuesta">
                  <p>ya que la potencia del lente es negativa y siendo \( D=\frac{1}{f} \) el foco sera negativo
                  por lo que el lente será divergente </p>
                  <img src="images/exp_7.jpg" alt="ejercicio_1" class="solved">
                </div>
              </div>
              <div class="btn_continuar">
                <button type="button" name="button" onclick="siguiente(8)">siguiente</button>
              </div>
            </div>
            <!-- EJERCICIO 8 -->
            <!-- EJERCICIO 8 -->
            <!-- EJERCICIO 8 -->
            <!-- EJERCICIO 8 -->
            <div id="ejercicio_8" class="ocultar">
              <div class="planteamiento">
                8) Siguiendo la ley de snell, si \(n_{2} < n_{1} \), entonces??<br/>
              </div>
              <div class="opciones">
                  <input type="radio" name="respuesta_8" value="1">\( v_{2}>v_{1} \)
                  <input type="radio" name="respuesta_8" value="2">\( \theta_{2}>\theta_{1} \)
                  <input type="radio" name="respuesta_8" value="3">\( \theta_{2}<\theta_{1} \)
                  <input type="radio" name="respuesta_8" value="4">\( v_{2}=v_{1} \)
                  <p>
                    <button type="button" name="enviar" onclick="resp(7)">enviar</button>
                  </p>
              </div>
              <div class="correcto_incorrecto">
                <p class="CORRECTO">CORRECTO</p>
                <p class="INCORRECTO">INCORRECTO</p>
                <button type="button" name="show_solution" disabled onclick="show_solved(8)">Mostrar solucion</button>
              </div>
              <div class="imagen_respuesta">
                <div class="respuesta">
                  <p>Si el indice de refraccion del primer material es mayor al segundo, la velocidad se reduce
                  y el rayo se desvia alejandose de la normal</p>
                </div>
              </div>
              <div class="btn_continuar">
                <button type="button" name="button" onclick="siguiente(9)">siguiente</button>
              </div>
            </div>
            <!-- resultados -->
            <!-- resultados -->
            <!-- resultados -->
            <!-- resultados -->
            <div id="ejercicio_9">
                <div class="resultados">
                  <p>Has obtenido <span id="puntaje">0</span> puntos</p>
                  <p id="mensaje_final"></p>
                </div>
                <hr>
                <h3>Comparte tu nota con todos!!!</h3>
                <form class="subir puntaje" action="php/add_points.php" method="post">
                  <input type="text" name="nombre" placeholder="Ingresa Tu nombre">
                  <input type="hidden" name="puntaje" value="0" id="nota">
                  <input type="submit" name="enviar_nota" value="Subelo">
                </form>
            </div>


          </div>
        </div>
      </div>

      <div class="mejores_puntajes">
        <h2>HALL OF FAME</h2>
        <section>
          <table class="rwd-table">
          <tr>
            <th>Nombre</th>
            <th>Puntaje</th>
          </tr>
        <?php
        try {
          $conection = new PDO('mysql:host=localhost; dbname=fisica','root','');
          $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          $conection->exec("SET CHARACTER SET UTF8");
          $sql_query = "SELECT NOMBRE,PUNTAJE FROM notas ORDER BY PUNTAJE DESC LIMIT 6";
          $result=$conection->prepare($sql_query);
          $result->execute();
          while ($fila = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo " <td data-th='Movie Title'> ". $fila["NOMBRE"]."</td>";
            echo " <td data-th='Genre'>" . $fila["PUNTAJE"] . "</td>";
            echo "</tr>";
          }
        } catch (Exception $e) {
          echo "error: " . $e;
        }
         ?>
        </table>

      </div>
      <footer>
        <p>Ecuaciones escritas en <a href="https://www.mathjax.org" target="_blank">MathJax</a></p>
        <p>Simuladores tomados de <a href="https://www.geogebra.org" target="_blank">Geogebra</a> </p>
        <br>
        <p>Creado el: 02/07/2020</p>
      </footer>
    </div>
    <script src="js/display.js" charset="utf-8"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  </body>
</html>
