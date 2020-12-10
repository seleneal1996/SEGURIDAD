<html>
<head>
    <title>Practica 6 - SEGURIDAD</title>
    <style>
      div {
        margin-bottom: 20px;
      }
      label {
        display: inline-block;
        width: 120px;
      }
      fieldset {
        border: 2px solid rgb(231, 109, 90);
        width: 600px;
        background:   #D8BFD8;
        
      }
      legend {
        padding: 20px 10;
        font-size: 40px;
      }
     input[type=button], input[type=submit] {
          background-color: #c99e95;
          border: none;
          color: white;
          padding: 16px 32px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
    }
    </style>
  </head>
<header>
  <link rel="stylesheet" type="text/css" href="style.css">
  <h1>
    Practica 6 : Funciones Hash
  </h1>
  <h2>
    Alumna: Barrios Cornejo Selene
  </h2>
  <h3>
    EPCC - SC 2020
  </h3>
</header>
<body>
<center>
        <?php

        echo "<h1>CALCULADORA HASH</h1>";
        echo "<form method='post' action='".$_SERVER['PHP_SELF']."' enctype='multipart/form-data'>";
        $ha = hash_algos();
        $ha[] = '-All-';
        echo "Algoritmo Hash: <select name='hashtype'>";
        foreach($ha as $k) {
                echo ($k == $_POST['hashtype']) ? ("<option selected='selected' name='$k'>$k</option>") : ("<option name='$k'>$k</option>");
        }
        echo "</select>";
        ?>   
        <br />
        <fieldset>
            <legend>Ingrese el Texto</legend>
            <p><textarea name="hashfield" rows="2" cols="200" placeholder="Mensaje codificado" ></textarea></p>
        </fieldset>
        <br />
        Archivo: <input type="file" name="hashfile" /> <br />
        <br />
        <input type="submit" value="CREAR">
        </form>

    <fieldset>
     <legend>Texto Codificado</legend>
     <p><textarea name="hashfield" rows="3" cols="200" placeholder="Mensaje codificado" ><?php include 'print.php'; ?></textarea></p>
    </fieldset>
</center>
</body>
</html>