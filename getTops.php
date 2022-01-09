<?php
function getTops($conect){
   
   $top3=[0,0,0];
   $top3Names=[];
   $topScore=0;
   $topScoreNombre;
   $lastScore;
   $lastScoreNombre;
   $resultado=mysqli_query($conect,"SELECT * FROM highest");
   while ($c= mysqli_fetch_array($resultado)){
       if ($c['points']>$topScore){
           $topScore=$c['points'];
           $top3[2]=$top3[1];
           $top3[1]=$top3[0];
           $top3[0]=$topScore;
           $top3Nombre[0]=$c['nombre'];
           $topScoreNombre=$c['nombre'];
       }
      else if($c['points']>$top3[1]){
           $top3[2]=$top3[1];
           $top3[1]=$c['points'];
           $top3Nombre[1]=$c['nombre'];
       }
       else if($c['points']>$top3[2]){
           $top3[2]=$c['points'];
           $top3Nombre[2]=$c['nombre'];
       }
      $lastScore=$c['points'];
      $lastScoreNombre=$c['nombre'];
   }
   ?>
  
   <h1>Lista de honor</h1>
   <table border=1>
   <h2>Top 3:</h2>
   <td>Nº1: <?php echo $top3Nombre[0];?> <?php echo $top3[0] ?> puntos</td>
   <td>Nº2:<?php echo $top3Nombre[1];?> <?php echo $top3[1] ?> puntos</td>
   <td>Nº2:<?php echo $top3Nombre[2];?> <?php echo $top3[2] ?> puntos</td>
   </table>
   <table border=1>
   <h2>Top Score:</h2>
   <td> <?php echo $topScoreNombre;?> con <?php echo $topScore;?> puntos</td>
   </table>
   <table border=1>
   <h2>Last score:</h2>
   <td> <?php echo $lastScore;?> con <?php echo $lastScoreNombre;?> puntos</td>
   </table>
   <?php
  }
?>