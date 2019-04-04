<?php include("bd/conexion.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi auto</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Days+One">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>
      <header>
        <a href="index.php" class="logo">
          <h1>Mi auto</h1>
          <h2>El sitio #1 sobre autos.</h2>
        </a>
        <nav>
          <ul> <!-- Lista -->
            <li> <a href="index.php">Inicio</a> </li>
            <li> <a href="consulta.php">Consultar</a> </li>
          </ul>
        </nav>
      </header>
      <div class="centrar">
        <section>
          <ul class="gallery2">
            <?php
              $query = "SELECT * FROM marca";
              // var_dump($query);
              $result = pg_query($connect, $query);
              // var_dump($result);

              echo "<table>";
              echo "<tr><td>Id</td>";
              echo "<td>Marca</td>";
              echo "<td>País</td></tr>";

              while ($row = pg_fetch_row($result)) {
                echo "<tr><td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td></tr>";
              }
              echo "</table>";
              pg_free_result($result);
              pg_close($connect);
            ?>
          </ul>
          <h3>Mi Auto</h3>
        </section>
      </div>
      <footer>
          <p>&copy; #CesarRebollar 2019</p>
      </footer>
  </body>
</html>
