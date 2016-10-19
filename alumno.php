<?php
//creo la clase alumno
class Alumno
{
  //creo sus propiedades
  public $nombre= 'Pablo';
  public $edad=27;
  public $curso='Primer curso';
  public $ciclo='DAW';
//y las llamo mediate los getters
  public function getnombre(){
    return $this->nombre;
  }
  public function getedad(){
    return $this->edad;
  }
  public function getcurso(){
    return $this->curso;
  }
  public function getciclo(){
    return $this->ciclo;
  }
  //creo las funciones SETTERS para poder hacer modificaciones
   public function setnombre($nom){
    $this->nombre=$nom;
  }
   public function setedad($ed){
     //introduzco el if para decirle que tiene que ser mayor que 18
   if ($ed<18) {
     echo 'Es menos de 18'."<br>";
    $this->edad=18;
    //introduzco el elseif ya que puedeser igual a 18
    // la diferencia del if al elseif esque si comprueba que es mayor que 18 no hace falta que siga leyendo si es igual o menor
  }elseif ($ed==18) {
      echo 'Es igual a 18'."<br>";
      $this->edad=$ed;
      //este elseif le dice que si es menor lo tiene que forzar a 18
    }elseif ($ed>18){
        echo 'Es mayor de 18'."<br>";
        $this->edad=$ed;
      }
   }
  public function setcurso($cur){
    //en este caso pongo que si es uno no pasa nada
    if ($cur==1) {
      echo 'El curso es '.$cur."<br>";
      $this->curso=1;
      //si es igual a 2 tampoco
      }elseif ($cur==2) {
        echo 'El curso es '.$cur."<br>";
        $this->curso=2;
        //pero si no es igual a 1 y tampoco es igual a 2 que fuerze a 1
        }elseif ($cur!=1 && $cur!=2) {
            echo 'El curso es '.$cur.' forzamos a 1'."<br>";
            $this->curso=1;
          }
  }
  public function setciclo($ci){
     $this->ciclo=$ci;
 }
}
  ?>
