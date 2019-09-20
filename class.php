<?php

header('Content-type: application/json');

    class Parallelepipedo {

      public $x;
      public $y;
      public $z;

      public function __construct($x, $y, $z) {

          $this -> x = $x;
            $this -> y = $y;
              $this -> z = $z;
      }

      public function getArea() {

        $area = 2 *( $this -> x * $this -> y + $this -> x * $this -> z + $this -> y * $this -> z );

        return $area;
      }
      public function getVol() {

        $vol = $this -> x * $this -> y * $this -> z ;
        return $vol;
      }
    };


    // $quadrato1 = new Quad(5);
    // $quadrato1 -> $lato = 5;
    // $area1 = $quadrato1 -> getArea();
    // echo $area1;

    $x1 = $_GET['x1'];
    $y1 = $_GET['y1'];
    $z1 = $_GET['z1'];


    $x2 = $_GET['x2'];
    $y2 = $_GET['y2'];
    $z2 = $_GET['z2'];


    $x3 = $_GET['x3'];
    $y3 = $_GET['y3'];
    $z3 = $_GET['z3'];



    $para1 = new Parallelepipedo($x1,$y1,$z1);
    $area1 = $para1 -> getArea();

    $para2 = new Parallelepipedo($x2,$y2,$z2);
    $area2 = $para2 -> getArea();

    $para3 = new Parallelepipedo($x3,$y3,$z3);
    $area3 = $para3 -> getArea();

    $aree = [];

    array_push($aree,$area1,$area2,$area3);



    echo json_encode($aree);




    // $arrPara = [
    //   new Parallelepipedo(5,4,3),
    //   new Parallelepipedo(6,23,7),
    //   new Parallelepipedo(1,78,4),
    // ];


    // $sommeAree = 0;
    // $sommeVolumi = 0;
    //
    // foreach ($arrPara as $para) {
    //   $aree = $para -> getArea();
    //   $volumi =  $para -> getVol();
    //
    //   echo "AREA : " . $aree . "<br>";
    //   echo "VOLUME : " . $volumi . "<br><br>";
    //
    //   $sommeAree += $para -> getArea();
    //   $sommeVolumi += $para -> getVol();
    //
    // }
    // echo "SOMMA AREE : " . $sommeAree . "<br><br>";
    // echo "SOMMA VOLUMI : " .$sommeVolumi . "<br><br>";

?>
