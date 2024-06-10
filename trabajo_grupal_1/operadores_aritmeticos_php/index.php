<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="shortcut icon" href="img/file-code-solid.svg" type="image/x-icon">

  <title>Operaciones y HTML 5</title>
</head>
  <body>

    <h2>Calculadora de Operaciones Básicas</h2>
    <div class="container">
      <section>
        <form class="form-container" method="post" action="index.php">
          Número 1: <input type="number" name="numero1" step="any" required><br><br>
          Número 2: <input type="number" name="numero2" step="any" required><br><br>
          <input type="submit" value="Calcular">
        </form>
      </section>

      <section>
      <?php
          if (!empty($_POST)) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            $multiplicacion = $numero1 * $numero2;
            $division = $numero1 / $numero2;
            echo "<h3>Resultados:</h3>";
            echo "Suma: $suma<br>";
            echo "Resta: $resta<br>";
            echo "Multiplicación: $multiplicacion<br>";
            echo "División: $division<br>";
          }else {
            echo "<h3>Sin Datos</h3>";
          ?>
            
          <?php
          }
        ?>
      </section>
    </div>
    <hr>
    <div>
    <fieldset>
      <legend>
        Etiquetas básicas en HTML 5
      </legend>
      
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae maiores magnam aliquid nulla rerum suscipit vel sint ipsa, porro error dolores quibusdam nam iste illum laborum natus eos incidunt et.

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto molestias illum dolore.
        <br> <br>
        <strong> ----- Etiquetas de Títulos ----- </strong>
        <h1> h1 - voluptates placeat ratione </h1>
        <h2> h2 - sunt officiis minima  </h2>
        <h3> h3 - eveniet unde consequatur </h3>
        <h4> h4 - sapiente laudantium rem </h4>
        <h5> h5 - necessitatibus assumenda, </h5>
        <h6> h6 - blanditiis amet </h6>
        <strong> ----- Etiqueta de Párrafo ----- </strong>
        <p> 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae maiores magnam aliquid nulla rerum suscipit vel sint ipsa, porro error dolores quibusdam nam iste illum laborum natus eos incidunt etc.
        </p>

        <br><br>
        <strong> ----- Lista Desorganizada ----- </strong> 
        <ul>
          <li>dolor sit amet</li>
          <li>consectetur adipisicing elit.</li>
          <li>Architecto molestias illum dolore voluptates</li>
          <li>placeat ratione</li>
        </ul>
        <br><br>
        <strong> ----- Lista Organizada ----- </strong> 
        <ol>
          <li>sunt officiis minima</li>
          <li>sapiente laudantium rem necessitatibus assumenda,</li>
          <li>eveniet unde consequatur</li>
          <li>blanditiis amet distinctio! Cupiditate!</li>
        </ol> 
    </div>
    <hr>
    <div>
    </fieldset>
      <br>
      <fieldset>
        <legend> Imagenes y Enlaces </legend>
        <br><br>
        <Strong> ----- Enlaces ----- </Strong>
        <br><br>
        <div class="separar">
          <a href="https://www.google.com.ar" target="_blank">Google</a>
          <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">Instagram</a> 
          <a href="https://fontawesome.com/icons">Font Awesome</a>
          <a href="http://www.lug.or.kr/files/cheat_sheet/" target="_blank" rel="noopener noreferrer">Cheat Sheet CSS3</a> 
          
          <i class="fa-solid fa-file-code" style="color: #FFD43B;"></i>
        </div>
          <br><br>
        <Strong> ----- Imágenes ----- </Strong><br><br>
        <div class="separar">
          <img src="img/CheatSheet-html5-1.png" alt="Hoja Trucos - HMTL 5 - 1"> 
          <img src="img/CheatSheet-html5-2.png" alt="Hoja Trucos - HMTL 5 - 2">
        </div>
      </fieldset>
    </div>
    <hr>
    <div >
      <fieldset>
        <legend>Tablas y Busquedas</legend>
          <div id="buscador">
            <div id="idBuscador">
              <input type="text" id="searchInput" placeholder="Buscar...">
            </div>
          </div>
          <table id="dataTable">
              <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Edad</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Juan</td>
                      <td>Pérez</td>
                      <td>30</td>
                  </tr>
                  <tr>
                      <td>María</td>
                      <td>Gómez</td>
                      <td>25</td>
                  </tr>
                  <tr>
                      <td>Pedro</td>
                      <td>López</td>
                      <td>40</td>
                  </tr>
                  <tr>
                      <td>Pedro</td>
                      <td>López</td>
                      <td>40</td>
                  </tr>
                  <tr>
                      <td>Pedro</td>
                      <td>López</td>
                      <td>42</td>
                  </tr>
                  <tr>
                      <td>Pedro</td>
                      <td>López</td>
                      <td>43</td>
                  </tr>
                  <tr>
                      <td>Pedro</td>
                      <td>López</td>
                      <td>44</td>
                  </tr>
                  <tr>
                      <td>Pedro</td>
                      <td>López</td>
                      <td>45</td>
                  </tr>
              </tbody>
          </table>
      </fieldset>

    </div>
    <script src="js/script.js"></script>
  </body>
</html>
