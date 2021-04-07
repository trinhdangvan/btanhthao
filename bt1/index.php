<?php

include "QuadraticEquation.php";
$Equation = new QuadraticEquation(2,6,4);
echo $Equation ->getDiscriminant()."<br>";
echo $Equation ->getRoot1().'<br>';
echo $Equation ->getRoot2();