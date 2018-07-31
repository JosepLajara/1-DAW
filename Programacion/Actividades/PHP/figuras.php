<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>figura 1</title>
    <style>
    .center-div
    {
      margin: 0 auto;
      width: 40px;
    }
    .div-center
    {
      margin: 0 auto;
      width: 40px;
    }
    </style>
  </head>
  <body>
    <center><p>
      <h1>Figura 1</h1>
      <?php
        $a=0;
        while ($a<=5) {
          echo ("*");
          echo "<br>";
          $a++;
        }
        //crear una línea para separar las figuras
        for($i=0;$i<298;$i++){
          echo("-");
        }
       ?>
      <h1>Figura 2</h1>
      <?php
        for ($i=0;$i<5;$i++) {
          for ($j=0;$j<5;$j++) {
            echo("*");
          }
          echo "<br>";
        }
        //crear una línea para separar las figuras
        for($i=0;$i<298;$i++){
          echo("-");
        }
      ?>
      <h1>Figura 3</h1>
      </center>
      <div class="center-div">
      <?php
      $aux=1;
        for ($i=0; $i<7;$i++) {
          for ($j=0; $j<$aux;$j++) {
            echo "*";
          }
          if($aux<7){
            $aux++;
          }
          echo "<br>";
        }
      ?>
    </div>
    <?php
    //crear una línea para separar las figuras
    for($i=0;$i<298;$i++){
      echo("-");
    }
    ?>
    <center><h1>Figura 4</h1></center>
    <div class="div-center">
      <?php
      for ($i=0; $i <= 2; $i++) {
        echo "*";
      for ($j=1; $j <= ($i*2); $j++) {
        echo "*";
      }
        echo "<br>";
      }
      for ($i=2; $i > 1; $i--) {
        echo "*";
      for ($j=2; $j >= 1; $j--) {
        echo "*";
      }
        echo "<br>";
      }
        echo "*"."<br>";
      ?>
    </div>
    <?php
    //crear una línea para separar las figuras
    for($i=0;$i<298;$i++){
      echo("-");
    }
    ?>
      <center>
        <h1>Figura 5</h1>
        <?php
        $aux=1;
          for ($i=0; $i<4;$i++) {
            for ($j=0; $j<$aux;$j++) {
              echo "*";
            }
            if($aux<7){
              $aux=$aux+2;
            }
            echo "<br>";
          }
        ?>
      </center>

    </p>
  </body>
</html>
