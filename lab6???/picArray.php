<?php

$num = filter_input(INPUT_POST, 'num');
$message = " ";

    $photoAreas = array(
      "1.jpeg" ,
      "2.jpeg" ,
      "3.jpeg",
      "4.jpeg" ,
      "5.jpeg" ,
      "6.jpeg" );



shuffle($photoAreas);
if (empty($num)){
  $message=("Please, enter a number.");
}
if (($num>6 ) ||($num <=1)){
  $message=("Please, enter any number between 1 and 6 ");
}


if($num == 1){
  echo "<img src=\"$photoAreas[0]\" width=\"530\" height=\"245\">";
  $message= "You won a week of vacation in the country which is shown above. Enjoy!!!";

}

if($num == 2){
  echo "<img src=\"$photoAreas[1]\" width=\"530\" height=\"245\">";
  $message= "You won two weeks of vacation in the country which is shown above. Enjoy!!!";
}
if($num == 3){
  echo "<img src=\"$photoAreas[2]\" width=\"530\" height=\"245\">";
  $message= "You won three weeks of vacation in the country which is shown above. Enjoy!!!";
}
if($num == 4){
  echo "<img src=\"$photoAreas[3]\" width=\"530\" height=\"245\">";
  $message= "You won a month of vacation in the country which is shown above. Enjoy!!!";
}

if($num == 5){
  echo "<img src=\"$photoAreas[4]\" width=\"770\" height=\"445\">";
$message = "Congratulations You Won The Grand Prize!!! You won a year of vacation in the country which is shown above. Enjoy!!!";
}

if($num == 6){
  echo "<img src=\"$photoAreas[5]\" width=\"530\" height=\"205\">";
  $message= "You won six months of vacation in the country which is shown above. Enjoy!!!";
}



include 'index.php';

?>
