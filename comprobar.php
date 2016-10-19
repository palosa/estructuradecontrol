<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>COMPROBACION ALUMNO</title>
  </head>
  <body>
<?php
//aqui pongo un include de la clase que he creado
include'alumno.php';
//creo una variable del objeto alumno
$alumnonuevo=new alumno();
//muestro por portanlla los GETTERS de la clase alumno sus propiedades
 echo 'COMPROBACION GETTERS'."<br>";
 $nombrealumno=$alumnonuevo->getnombre();
 echo 'NOMBRE: '.$nombrealumno."<br>";
 $edadalumno=$alumnonuevo->getedad();
 echo 'EDAD: '.$edadalumno."<br>";
 $cursoalumno=$alumnonuevo->getcurso();
 echo 'CURSO:'.$cursoalumno."<br>";
 $cicloalumno=$alumnonuevo->getciclo();
 echo 'CICLO:'.$cicloalumno. "<br>"."<br>";
//aqui pongo un echo para diferenciar los GETTERS de los SETTERS
 echo 'COMPROBACION SETTERS'."<br>";
//inicio variable con el nuevo nombre
 $nuevonombre='Jorge';
//llamo a getnombre para que salga por pantalla el nuevo nombre
 $alumnonuevo->setnombre($nuevonombre);
 $nombrealumnonuevo=$alumnonuevo->getnombre();
 echo 'Nuevo nombre:'.$nombrealumnonuevo."<br>"."<br>";

 $nuevaedad=15;
 $alumnonuevo->setedad($nuevaedad);
 $edadalumnonueva=$alumnonuevo->getedad();
 echo 'La edad es:'.$edadalumnonueva."<br>"."<br>";

 $nuevacurso=3;
 echo 'Indico nuevo curso a '.$nuevacurso.'<br>';
 $alumnonuevo->setcurso($nuevacurso);
 $cursoalumnonueva=$alumnonuevo->getcurso();
 echo 'El alumno está en el curso: '.$cursoalumnonueva."<br>"."<br>";

 $nuevociclo='Sact';
 $alumnonuevo->setciclo($nuevociclo);
 $cicloalumnonuevo=$alumnonuevo->getciclo();
 echo 'Nuevo ciclo:'.$cicloalumnonuevo."<br>"."<br>";

?>
  </body>
</html>
